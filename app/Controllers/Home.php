<?php namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController{

	public $userModel = null;

	public function index(){

		$this->userModel=new UserModel();


		// Does an insert()
		$data = [
        'name' => 'darth',
        'email'    => 'd.vader@theempire.com'
		];

	//	var_dump($this->userModel->save($data));


		//var_dump($this->userModel->delete([63]));
	//	var_dump($this->userModel->where('email', 'd.vader@theempire.com')->delete());


	//	var_dump($this->userModel->find('1'));


		$allUsers = $this->userModel->where('id', '63')->withDeleted()->find(); var_dump($allUsers);






/*


$userModel->delete(38);
$userModel->where('name', 'asdasd')->delete();


$user = $userModel->find('32');
var_dump($user);

$users = $userModel->where('id', 33)->findAll();
var_dump($users);

$user = $userModel->where('deleted_at', 0)->first();
var_dump($user);

*/

		//$user32=$usermodel->findAll();

		//var_dump($user32);


		//if(!$this->session->has('MyData')){return redirect()->to(baseURL.'public/index.php/sesion/show');}
		 return view('inicio/view_go');

	}

	//--------------------------------------------------------------------

}
