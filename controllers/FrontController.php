<?php 
include_once('controllers/Appcontroller.php');

class FrontController extends AppController{
	public function __construct(){
		include('entity/Front.php');
	}
	public function home(){
		$front = new Front();
		$allFronts = $front->getAll();

		$this->render('layout','home',$allFronts);
	}
}
 ?>
