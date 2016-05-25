<?php namespace Dieter\Testimonals\Controllers;

use Backend\Classes\Controller;
use Illuminate\Support\Facades\Input;
use Backend\Facades\Backend;
use \dieter\testimonals\models;

use BackendMenu;
use Backend\Facades\BackendAuth;
use dieter\Teammembers\Plugin;
use System\Classes\PluginManager;

class Testimonials extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dieter.Testimonals', '/');
    }

}
