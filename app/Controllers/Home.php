<?php namespace App\Controllers;

class Home extends BaseController{

	public function index(){

		if(!$this->session->has('MyData')){return redirect()->to('/carweb/public/sesion/show');}
		 return view('inicio/view_go');

	}

	//--------------------------------------------------------------------

}