<?php namespace Dieter\Teammembers\Controllers;

use Backend\Classes\Controller;
use Illuminate\Support\Facades\Input;
use Backend\Facades\Backend;
use \dieter\teammembers\models;

use BackendMenu;
use Backend\Facades\BackendAuth;
use dieter\Teammembers\Plugin;
use System\Classes\PluginManager;

class Teammembers extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
		  $this->pageTitle = 'Manage teammembers';
        //BackendMenu::setContext('Dieter.Teammembers', 'teammembers');
    }

	 public function create_onSave(){
		 $inputs = post('Teammember');

		 $member = new Models\Teammember;
		//  $member->name = Input::get('name');
		 $member->name = $inputs['name'];
		 $member->job = $inputs['job'];
		 $member->imageurl = $inputs['imageurl'];
		 $member->hiredate = $inputs['hiredate'];
		 $member->imageurl = $inputs['imageurl'];

		 if( $member->save() ) {
			  \Flash::success('Successvol gesaved');
		 }
		 else{
			  $messages = array_flatten( $note->errors()->getMessages() );
			  $errors = implode( ' - ', $messages );
			  \Flash::error('Validation error: ' . $errors );
		 }
		 return \Redirect::to( Backend::url() );
   }

	public function index(){
		 $this->makeLists();
		 $this->makeView('index');
	}
}
