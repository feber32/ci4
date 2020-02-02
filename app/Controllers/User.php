<?php namespace App\Controllers;

class User extends BaseController{

	public function index(){



	}

  public function nuevo(){
    if($this->session->has('MyData')){return redirect()->to('/carweb/public/inicio');}
		 return view('User/view_new');

  }

	//--------------------------------------------------------------------

}
