<?php namespace Elderand\LandingPage\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Home extends Controller
{
    public $implement = [        'Backend\Behaviors\FormController'    ];
    
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Elderand.LandingPage', 'content-manager', 'home_content');
    }
}
