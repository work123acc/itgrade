<?php
	
	final class Controller {
		private $tasks;
		private $tasksList;
		private $user;
		private $message;
		
		
		public function __construct() {
			$this->tasks = new Tasks();			
			$this->user = $_SESSION['user']['login'];
		}
		
		
		/*------------------------------- аворизация -----------------------------------------*/
		
		public function authUser() {
			require_once './inc/user.php'; 
			
			if ($_POST['login'] === $login && $_POST['password'] === $password) {
				$_SESSION['user']['auth'] = true;
				$_SESSION['user']['login'] = 'admin';
				$this->user = 'admin';
			}
			else {
				$this->message = 'Неверный логин или пароль!';
				
			}
		}
		
		
		public function exitUser() { 
			if ($_POST['exit']) {
				$_SESSION['user'] = '';
				unset ($_SESSION['user']);	
				$this->user = null;
			}
		}
		
		
		/*------------------------------- рабата с БД -----------------------------------------*/
		
		
		private function getTasks() { 
			if ($_POST['action'] === 'search' && $_POST['search']) {				
				//return [ 'tasks' => $this->tasks->searchTasks( $_POST['search'] ) , 'count' => $this->tasks->getCountTable() ];			
				return [ 'tasks' => $this->tasks->searchTasks( $_POST['search'] ) ];			
			}
			else {
				
				return [ 'tasks' => $this->tasks->getAlltasks() , 'count' => $this->tasks->getCountTable() ];
			}
		}
		
		public function updateBase() { 
			$this->message = 'Ошибка записи!';
			
			if ( $this->user === 'admin' ) {
				if ( $_POST['add'] && $this->tasks->addNewTask() ) { 
					$this->message = 'Запись добавлена!';
				} 	
				else if ( $_POST['delete'] && $this->tasks->editTask( 'delete' ) ) { 
					$this->message = 'Запись удалена!'; 
				}				
				else if ( $_POST['edit'] && $this->tasks->editTask( 'edit' ) ) { 
					$this->message = 'Изменения сохранены!'; 
				}	
				else {
					$this->message = 'Ошибка записи!  Некорректно введен адрес!'; 
				}
			}			
			
			
		}
		
		
		
		public function loadView() {
			
			$this->tasksList = $this->getTasks();
			require_once('./view/header.php');
			require_once('./view/form_search.php');
			
			if ($this->user === 'admin') { 
				require_once('./view/form_add.php');
				require_once('./view/form_exit.php') ;
				require_once('./view/page_admin.php');
			} 			
			else { 
				require_once('./view/form_auth.php'); 
				require_once('./view/page.php');
			}						
			
			require_once('./view/footer.php');
		}	
	}	
	
?>				