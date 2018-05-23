<?php namespace Octoplus\Wiki\Models;

use Model;
use BackendAuth;
use Carbon\Carbon;

/**
 * Model
 */
class Section extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Revisionable;
    use \Octoplus\Wiki\Traits\Publishable;

    //
    // Traits properties
    //

    public $revisionableLimit = 200;
    protected $revisionable = ['content'];

    //
    // Model properties
    //

    /**
     * @var string The database table used by the model.
     */
    public $table = 'octoplus_wiki_sections';
    protected $dates = ['published_at','deleted_at'];
    protected $jsonable = ['comments'];

    //
    // Validations
    //

    public $rules = [
      'title' => 'required',
    ];

    public function afterValidate()
    {
        //if the section is published but do not precise a published_at Data
        //Today is the publication date
        if ($this->published && !$this->published_at) {
          $this->published_at = Carbon::Now();
        }
    }

    //
    // Relations
    //

    public $belongsTo = [
        'article' => 'Octoplus\Wiki\Models\Article'
    ];

    /**
    * @var array Relations
    */
    public $morphMany = [
        'revision_history' => ['System\Models\Revision', 'name' => 'revisionable']
    ];

    public function diff(){
      $history = $this->revision_history;
    }

    //
    // Trait functions
    //

    /**
     * The user who made the revision.
     */
    public function getRevisionableUser()
    {
        return BackendAuth::getUser()->id;
    }
}
