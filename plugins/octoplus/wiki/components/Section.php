<?php namespace Octoplus\Wiki\Components;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Cms\Classes\ComponentBase;
use Octoplus\Wiki\Models\Section as SectionModel;
use Octoplus\Wiki\Models\Article as ArticleModel;
use Response;
use Lang;

class Section extends ComponentBase
{

  /*
   * @var Octoplus\Wiki\Models\Section The Section model used for display.
   */
  public $section;

    public function componentDetails()
    {
        return [
          'name'        => 'octoplus.wiki::c_section.component.section',
          'description' => 'octoplus.wiki::c_section.component.sectionDescription'
        ];
    }

    public function defineProperties()
    {
        return [
          'slug' => [
              'title'       => 'octoplus.wiki::c_section.settings.section_slug',
              'description' => 'octoplus.wiki::c_section.settings.section_slug_description',
              'default'     => '{{ :slug }}',
              'type'        => 'string'
          ],
          'article_slug' => [
              'title'       => 'octoplus.wiki::c_section.settings.section_article_slug',
              'description' => 'octoplus.wiki::c_section.settings.section_article_slug_description',
              'default'     => '{{ :article }}',
              'type'        => 'string'
          ],
        ];
    }

    public function onRun(){
      $this->section = $this->page['section'] = $this->loadSection();

      $this->lang = $this->page['lang'] = [
        'next'         => Lang::get('octoplus.wiki::c_section.partials.next'),
        'prev'         => Lang::get('octoplus.wiki::c_section.partials.prev'),

      ];
    }

    protected function loadSection()
    {
        $slug = $this->property('slug');
        $article_slug = $this->property('article_slug');

        $article = new ArticleModel;
        $article = $article->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')
            ? $article->transWhere('slug', $article_slug)
            : $article->where('slug', $article_slug);


        try {
          $article = $article->firstOrFail();

          $section = new SectionModel;

          $section = $article->sections()->isPublished()->where('slug', $slug)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return \Response::make($this->controller->run('404'), 404);
        }

        for ($i=0; $i < count($article->sections); $i++) {

          $articles_section = $article->sections[$i];

          if($articles_section->id == $section->id){
            if($i>0){
              $section->prev = $article->sections[$i-1];
            }
            if($i<count($article->sections)-1){
              $section->next = $article->sections[$i+1];
            }
          }
        }

        return $section;
    }
}
