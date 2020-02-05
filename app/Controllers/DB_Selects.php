<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;


class DB_Selects extends BaseController{

  public $userModel = null;
  public $response = null;


	public function index(){

	}

  public function login(){

    header('Content-Type: application/json');  // <-- header declaration

    $a=  $_POST['name'];
    $b=  $_POST['location'];

    $this->userModel=new UserModel();

    $allUsers = $this->userModel->where('email', $a)->where('pass', $b)->withDeleted()->find();
 

    if($allUsers){

      $data=$allUsers[0];


      $newdata = [
              'ID'        => $data['id'],
              'username'  => $data['name'],
              'email'     => $data['email']
      ];

      $this->session->set('MyData',$newdata);

         return json_encode( array('Acceso'=>true));
    }else{

         return json_encode(array(false));

    }




  }

}
