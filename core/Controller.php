<?php 

class Controller 
{

	public function loadView($view, $info = array()) 
	{
		extract($info);
		include_once 'views/'.$view.'.php';
	}

	public function error404() 
	{
		$this->loadView('404');
	}
	
}