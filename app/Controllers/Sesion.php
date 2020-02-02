<?php namespace App\Controllers;

class Sesion extends BaseController{

	public function index(){

		if(!$this->session->has('MyData')){
			return view('login/view_login');
		}else{
				return redirect()->to('/carweb/public/inicio');
		}


/*
		if(!$this->session->has('MyData')){
			return redirect()->to('/carweb/public/Sesion/show');
		}
		else{
			return redirect()->to('/carweb/public/home');
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
	//	return redirect()->to('/carweb/public/login/show');
	}

  public function show(){
    return view('login/view_login');
  }

	public function get(){
			var_dump($this->session->get('MyData'));
	}




	//--------------------------------------------------------------------

}
