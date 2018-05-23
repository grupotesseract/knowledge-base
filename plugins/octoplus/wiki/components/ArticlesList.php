<?php namespace Octoplus\Wiki\Components;

use Cms\Classes\ComponentBase;
use Octoplus\Wiki\Models\Article as ArticleModel;
use Lang;

class ArticlesList extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'octoplus.wiki::c_articlelist.component.articlesList',
            'description' => 'octoplus.wiki::c_articlelist.component.articlesListDescription'
        ];
    }

    public function defineProperties()
    {
        return [
          'article_url' => [
              'title'       => 'octoplus.wiki::c_articlelist.settings.articlesList_url',
              'description' => 'octoplus.wiki::c_articlelist.settings.articlesList_url_description',
              'default'     => '/articles',
              'type'        => 'string'
          ],
        ];
    }

    public function onRun(){
      $this->articles = $this->page['articles'] = $this->loadArticles();

      $this->addCss('/plugins/octoplus/wiki/assets/articleList.css');
    }

    protected function loadArticles()
    {
      $articles = ArticleModel::isPublished()->get();

      return $articles;
    }

}
