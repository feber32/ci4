<?php namespace App\Controllers;

class Home extends BaseController{

	public function index(){

		if(!$this->session->has('MyData')){return redirect()->to(baseURL.'public/index.php/login');}
		 return view('inicio/view_go');

	}

	//--------------------------------------------------------------------

}
