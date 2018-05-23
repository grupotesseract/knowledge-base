<?php namespace Octoplus\Wiki\FormWidgets;

use Backend\Classes\FormField;
use Backend\Classes\FormWidgetBase;
use System\Models\Revision;
use Octoplus\Wiki\Models\Section;
use Flash;
use Input;
use Lang;

/**
 * RevisionHistory Form Widget
 */
class RevisionHistory extends FormWidgetBase
{
    //
    // Configurable properties
    //


    /**
     * {@inheritDoc}
     */
    protected $defaultAlias = 'octoplus_wiki_revision_history';

    /**
     * {@inheritDoc}
     */
    public function init()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('revisionhistory');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['history'] = $this->model->revision_history;
        $this->vars['section_id'] = $this->model->id;
    }

    /**
     * {@inheritDoc}
     */
    public function loadAssets()
    {
        $this->addCss('css/revisionhistory.css', 'octoplus.wiki');
        $this->addJs('js/revisionhistory.js', 'octoplus.wiki');
    }

    /**
     * {@inheritDoc}
     */
     public function getSaveValue($value)
     {
         return FormField::NO_SAVE_DATA;
     }

     //
     // AJAX handlers
     //
     public function onRevertHistory(){
       $revision_id = Input::get('revision_id');
       $section_id  = Input::get('section_id');

       $section = Section::find($section_id);
       $history = Revision::find($revision_id);

       $section->content = $history->old_value;

       $section->save();

       Flash::success(Lang::get('octoplus.wiki::fw_revisionhistory.flash.success'));
     }
}
