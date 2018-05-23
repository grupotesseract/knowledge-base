<?php namespace Octoplus\Wiki\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Articles extends Controller
{
    public $implement = [
      'Backend\Behaviors\ListController',
      'Backend\Behaviors\FormController',
      'Backend\Behaviors\ReorderController',
      'Backend\Behaviors\RelationController'
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'octoplus.wiki.use'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Octoplus.Wiki', 'main-menu-item');
        $this->addCss("/plugins/octoplus/wiki/assets/badges.css");
    }
}
