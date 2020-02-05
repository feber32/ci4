<?php namespace App\Controllers;

class Login extends BaseController{

	public function index(){

		if(!$this->session->has('MyData')){
			return view('login/view_login');
		}else{
			return redirect()->to(baseURL.'public/index.php/inicio');
		}

	}

	public function salir(){
		$this->session->removeTempdata('MyData');
		return redirect()->to(baseURL.'public/index.php/login');
	}

	public function valida(){

		$newdata = [
						'ID'  => '32',
						'username'  => 'Feber',
						'email'     => 'feber32@leber.dev',
						'logged_in' => TRUE
		];

		$this->session->set('MyData',$newdata);

		return redirect()->to(baseURL.'public/index.php/inicio');
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
		return redirect()->to(baseURL.'public/index.php/login/show');
	}

  public function show(){
    return view('login/view_login');
  }

	public function get(){
			var_dump($this->session->get('MyData'));
	}


}

 /*

class Login extends BaseController{

	public function index(){
			if(!$this->session->has('MyData')){return redirect()->to(baseURL.'public/index.php/login/show');}else{
				return redirect()->to(baseURL.'public/index.php/home');
			}
	}

  public function show(){
    return view('login/view_login');
  }

	public function get(){
		  var_dump($this->session->get('MyData'));
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
		return redirect()->to(baseURL.'public/index.php/login/show');
	}




}
*/
