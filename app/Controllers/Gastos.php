<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Gastos extends BaseController{

	public function __construct(){

	}

	public function index(){
		return view('welcome_message');
	}

  public function show(){
    return view('login/view_login');
  }



}
