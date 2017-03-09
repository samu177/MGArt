<?php 
	foreach (glob('controllers/*.php') as $filename){
        include $filename;
    }

	$controller = 'Front';
	$action = 'home';

	if(isset($_GET['controller']) && isset($_GET['action'])){
		$controller = $_GET['controller'];
		$action = $_GET['action'];
	}

	try{
		$controllerClassName = $controller.'Controller';
		$controller = new $controllerClassName();
		$controller->$action();
	}catch(Exception $e){
		$controller = new FrontController();
		$controller->home();
	}
 ?>