<?php
	
	final class Tasks extends Model
	{
		
		
		/*------------------------------- изменение записей-----------------------------------------*/
		
		public function addNewTask()
		{
			$name = strip_tags( $_POST['name'] );
			$adress = strip_tags(  $_POST['adress'] );
			$description = trim( strip_tags(  $_POST['description'] ) );
			$status = strip_tags( $_POST['status'] );
			$price = strip_tags( $_POST['price'] );
			
			if ( $this->controlAdress($adress) ) {
				if ( $_FILES['image']['tmp_name'] && $_FILES['image']['name'] ) {
					$image = "./images/" . mt_rand(101, 999) . $_FILES['image']['name'] ;
					move_uploaded_file($_FILES['image']['tmp_name'], $image );
				}
				
				if ( $name && $adress && $description && $price && $image ) {		
					$sql = "INSERT INTO estate (name, adress, description, price, status, image) VALUES (? , ? , ?, ?, ?, ?);";
					$params = [$name, $adress, $description, $price, $status, $image];
					
					$this->updateData($sql, $params);
					if ( $this->connection->errorCode() === '00000' )  return true; 
					
				}
				
			}
			else {
				return false;
			}
			
		}
		
		
		
		
		
		public function editTask($type)
		{
			$ids = $this->getAllTasks(true);
			foreach ($ids as $t) {
				if ($t['id'] === $_POST[$type]) {
					$id = $_POST[$type];
				}
			}
			
			if ($type === 'delete' && ( intval( $id ) > 0 ) ) {
				$sql = "DELETE FROM estate WHERE id=?;";
				$params = [$id];
				
			} 
			
			else if ($type === 'edit' && ( intval( $id ) > 0 ) ) {
				
				$name = strip_tags( $_POST['name'] );
				$adress = strip_tags(  $_POST['adress'] );
				$description = strip_tags(  $_POST['description'] );
				$status = strip_tags( $_POST['status'] ) ;
				$price = strip_tags( $_POST['price'] );
				
				if ( $this->controlAdress($adress) ) {
					
					if ( $_FILES['update_image']['tmp_name'] && $_FILES['update_image']['name'] ) {
						$image = "./images/" . mt_rand(101, 999) . $_FILES['update_image']['name'] ;
						move_uploaded_file($_FILES['update_image']['tmp_name'], $image );
					}
					else {				
						$image = strip_tags( $_POST['image'] ) ;
					}
					
					
					if ( $name && $adress && $description && $price && $image ) {	
						
						$sql = "UPDATE estate SET name=?, adress=?, description=?, price=?, status=?, image=?";
						$lastTask = $this->getAllTasks($id, true)[0]['task'];
						
						
						$sql .= " WHERE id=? ; ";
						$params = [$name, $adress, $description, $price, $status, $image, $id]; 
						
					}
				}
			}
			
			if ($sql && $params) { 
				$this->updateData($sql, $params);
				if ( $this->connection->errorCode() === '00000' )  return true; 	
			}
			else {
				return false;
			}
		}
		
		
		
		
		
		
		/*------------------------------- служебные запросы -----------------------------------------*/
		
		
		private function controlAdress ($adress) {
			if ( preg_match('#^[A-zА-я-_\., ]{1,}[0-9]{1,}[0-9- ]{0,}$#msui', $adress) ) {
				return true;
			} 
			else {
				return false;
			}
		}
		
		
		public function getCountTable()
		{
			return implode($this->selectData("SELECT COUNT(*) FROM estate;")[0]);
		}
		
		
		public function searchTasks($adress)
		{
			if ( $adress ) {
				$adress = intval($adress);
				$adress1 = "% {$adress}-%";
				$adress2 = "% {$adress}";
				$adress3 = "% {$adress}%";
				
				$sql = "SELECT * FROM estate WHERE adress LIKE ? OR adress LIKE ? OR adress LIKE ? ; " ;
				$params = [ $adress1, $adress2, $adress3 ];
				return $this->selectData($sql, $params);
			}
			
		}
		
		
		public function getAllTasks($id = false, $task = false)
		{
			if ($task && $id) {
				//$sql = "SELECT estate FROM tasks WHERE id={$id} ;" ;
				$sql = "SELECT estate FROM tasks WHERE id=? ;" ;
				$params = [$id];
			} 
			else if ($id) {
				
				$sql = "SELECT id FROM estate ;";
			} 
			else {			
				$sort = ($_GET['sort']) ? $_GET['sort'] : '';				
				$sql = "SELECT * FROM estate" ;
				$sql .= ($sort) ? " ORDER BY price {$sort}" : " ORDER BY id DESC ; ";
			}
			
			//$sql = "SELECT * FROM estate ORDER BY id DESC;";
			
			
			return $this->selectData($sql, $params);
		}
	}
