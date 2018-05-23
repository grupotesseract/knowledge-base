<?php namespace Octoplus\Wiki\Components;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Octoplus\Wiki\Models\Article as ArticleModel;
use Octoplus\Wiki\Models\Section as SectionModel;
use Lang;

class Article extends ComponentBase
{

    /*
     * @var Octoplus\Wiki\Components\Article The Article model used for display.
     */
    public $article;

    public function componentDetails()
    {
        return [
            'name'        => 'octoplus.wiki::c_article.component.article',
            'description' => 'octoplus.wiki::c_article.component.articleDescription'
        ];
    }

    public function defineProperties()
    {
        return [
          'slug' => [
              'title'       => 'octoplus.wiki::c_article.settings.article_slug',
              'description' => 'octoplus.wiki::c_article.settings.article_slug_description',
              'default'     => '{{ :slug }}',
              'type'        => 'string'
          ],
          'paginate_sections' => [
            'title'         => 'octoplus.wiki::c_article.settings.article_paginate_section',
            'description'   => 'octoplus.wiki::c_article.settings.article_paginate_section_description',
            'default'       => false,
            'type'          => 'checkbox',
            'group'         => 'octoplus.wiki::c_article.settings.article_paginate_section_group'
          ],
          'sectionPage' => [
            'title'         => 'octoplus.wiki::c_article.settings.article_paginate_section_url',
            'description'   => 'octoplus.wiki::c_article.settings.article_paginate_section_url_description',
            'default'       => '/sections',
            'type'          => 'dropdown',
            'group'         => 'octoplus.wiki::c_article.settings.article_paginate_section_group'
          ],
          'toc' => [
            'title'         => 'octoplus.wiki::c_article.settings.article_toc',
            'description'   => 'octoplus.wiki::c_article.settings.article_toc_description',
            'default'       => false,
            'type'          => 'checkbox',
            'group'         => 'octoplus.wiki::c_article.settings.article_toc_group'
          ],
        ];
    }

    /**
    * Provide the lists of pages to the sectionPage dropdown
    */
    public function getSectionPageOptions(){
      return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun(){
      $this->article = $this->page['article'] = $this->loadArticle();
      $this->sectionPage = $this->page['sectionPage'] = $this->property('sectionPage');

      $this->lang = $this->page['lang'] = [
        'introduction' => Lang::get('octoplus.wiki::c_article.partials.introduction'),
        'next'         => Lang::get('octoplus.wiki::c_article.partials.next'),
        'sections'     => Lang::get('octoplus.wiki::c_article.partials.sections')
      ];

      if($this->property('toc')){
        $this->addCss('/plugins/octoplus/wiki/assets/bootstrap-toc.min.css');
        $this->addCss('/plugins/octoplus/wiki/assets/toc.css');
        $this->addJS('/plugins/octoplus/wiki/assets/bootstrap-toc.min.js');
        $this->addJS('/plugins/octoplus/wiki/assets/toc.js');
      }
    }

    protected function loadArticle()
    {
        $slug = $this->property('slug');
        $article = new ArticleModel;
        $article = $article->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')
            ? $article->transWhere('slug', $slug)
            : $article->where('slug', $slug);

        try{
          // eager loading article and section
          $article = $article->firstOrFail();
          $article->sections = $article->sections()->isPublished()->get();

        } catch (ModelNotFoundException $e) {
            return \Response::make($this->controller->run('404'), 404);
        }

        return $article;
    }


}
