<?php namespace App\Controllers;

class Sesion extends BaseController{

	public function index(){

		if(!$this->session->has('MyData')){
			return view('login/view_login');
		}else{
				return redirect()->to(baseURL.'public/inicio');
		}


/*
		if(!$this->session->has('MyData')){
			return redirect()->to(baseURL.'public/Sesion/show');
		}
		else{
			return redirect()->to(baseURL.'public/home');
		}
*/

	}

	public function set(){

		$newdata = [
						'ID'  => '32',
						'username'  => 'Feber',
						'email'     => 'feber32@leber.dev',
						'logged_in' => TRUE
		];

		$this->session->set('MyData',$newdata);

	}

	public function dell(){
		$this->session->removeTempdata('MyData');
	//	return redirect()->to(baseURL.'public/login/show');
	}

  public function show(){
    return view('login/view_login');
  }

	public function get(){
			var_dump($this->session->get('MyData'));
	}




	//--------------------------------------------------------------------

}
