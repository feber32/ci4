<?php namespace App\Controllers;

use CodeIgniter\Controller;
class Inicio extends BaseController{

	public function index(){
			if(!$this->session->has('MyData')){return redirect()->to(baseURL.'public/sesion');}
			 return view('inicio/view_go');
	}

	public function go(){


	}




}
