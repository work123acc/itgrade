<?php
	
	final class Router {
		private $controller;
		
		/*----------------------- comment ----------------------------*/
		private function loadPath($file) {
			require_once $file .'.php';		
		}
		/*----------------------- comment ----------------------------*/
		
		public function run( ) {	
			/*----------------------- comment ----------------------------*/
			$this->loadPath('model');
			$this->loadPath('tasks');
			$this->loadPath('controller');
			/*----------------------- comment ----------------------------*/
			
			$this->controller = new Controller();
			
			if ($_POST['action'] === '1') { $this->controller->updateBase(); }
			
			if ($_POST['login'] && $_POST['password'] ) { $this->controller->authUser(); }
			if ($_POST['exit'] ) { $this->controller->exitUser(); }
			
			$this->controller->loadView();
		}
	}
	
?>