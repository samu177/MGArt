<?php 
class AppController{
	public function render($layout, $view, $data){
		$view_to_show = $view;
		$data_to_view = $data;
		include('views/front/layouts/' . $layout.'.php');
	}
}

 ?>