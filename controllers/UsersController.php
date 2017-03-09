<?php 
include_once('controllers/Appcontroller.php');

class UsersController extends AppController{
	public function __construct(){
		include('entity/User.php');
	}
	public function index(){
		$user = new User();
		$allUsers = $user->getAll();

		$this->render('layout','index',array( 'allUsers' => $allUsers));
	}
}
 ?>
