<?php namespace Octoplus\Wiki\Models;

use Model;
use Carbon\Carbon;

/**
 * Model
 */
class Article extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \Octoplus\Wiki\Traits\Publishable;

    protected $dates = ['deleted_at'];

    /*
     * Validation
     */
    public $rules = [
      'title' => 'required',
      'abstract' => 'required',
      'slug' => 'unique:octoplus_wiki_articles'
    ];

    /**
     * Generate a published_at string
     */
     public function afterValidate()
     {
         //if the section is published but do not precise a published_at Data
         //Today is the publication date
         if ($this->published && !$this->published_at) {
           $this->published_at = Carbon::Now();
         }
     }

    /**
     * @var string The database table used by the model.
     */
    public $table = 'octoplus_wiki_articles';

    public $hasMany = [
        'sections' => ['Octoplus\Wiki\Models\Section']
    ];
}
