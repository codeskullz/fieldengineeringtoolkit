<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Planning extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'Planning' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.FieldEngineeringToolkit', 'main-menu-item', 'side-menu-item4');
    }
}
