<?php namespace Octoplus\Wiki;

use System\Classes\PluginBase;
use System\Models\Revision as Revision;
use Octoplus\Wiki\Classes\Diff as Diff;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [
          'Octoplus\Wiki\Components\Article'       => 'article',
          'Octoplus\Wiki\Components\Section'       => 'section',
          'Octoplus\Wiki\Components\ArticlesList'  => 'articlesList'
      ];
    }

    public function registerFormWidgets()
    {
      return [
        'Octoplus\Wiki\FormWidgets\RevisionHistory' => 'revisionHistory'
      ];
    }

    public function registerListColumnTypes()
    {
      return [
        'image' => function($value, $column, $record) {

          if ($value) {
              return '<img src="/storage/app/media/'. $value.'" width="50px" height="50px"/>';
          }else{
              return '<img src="http://placehold.it/50x50" />';
          }
        },
        'countcomment' => function($value, $column, $record) {

          $count = 0;
          if(is_array($value)){
            foreach ($value as $k => $v)
            {
                if($v['acknowledge'] == 0) $count++;
            }
          }

          return  '<span class="badge">'.$count.'</span>';
        }
      ];
    }

    public function registerSettings()
    {
    }

    public function boot(){

      /* Extetions for revision */
      Revision::extend(function($model){
        /* Revison can access to the login user */
        $model->belongsTo['user'] = ['Backend\Models\User'];

        /* Revision can use diff function */
        $model->addDynamicMethod('getDiff', function() use ($model){
          return Diff::toHTML(Diff::compare($model->old_value, $model->new_value));
        });
      });
    }
}
