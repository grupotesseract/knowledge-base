<?php namespace Octoplus\Wiki\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * PublicationManager Form Widget
 */
class PublicationManager extends FormWidgetBase
{

    /**
     * {@inheritDoc}
     */
    protected $defaultAlias = 'octoplus_wiki_publication_manager';

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
        return $this->makePartial('publicationmanager');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
    }

    /**
     * {@inheritDoc}
     */
    public function loadAssets()
    {
        $this->addCss('css/publicationmanager.css', 'octoplus.wiki');
        $this->addJs('js/publicationmanager.js', 'octoplus.wiki');
    }

    /**
     * {@inheritDoc}
     */
    public function getSaveValue($value)
    {
        return $value;
    }

}
