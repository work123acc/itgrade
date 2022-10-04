<?php
	
	class Model
	{
		
		private $servername = 'mysql:host=localhost;dbname=f0725656_test_base';
		private $username = 'f0725656_test_base';
		private $password = 'root';
		
		protected $connection;
		
		
		public function __construct()
		{
			$this->connection = new PDO($this->servername, $this->username, $this->password);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->connection->exec("SET NAMES utf8;");
		}
		
		protected function selectData($sql = null, $params = [])
		{
			try {
				
				$result = $this->connection->prepare($sql);
				$result->execute($params);
				return $result->fetchAll(PDO::FETCH_ASSOC);
			} 
			catch (PDOException $e) {
				//echo '<pre>' . $e . '</pre>';
				echo '';
			}
		}
		
		protected function updateData($sql = null, $params = [])
		{
			
			try {
				$result = $this->connection->prepare($sql);
				$result->execute($params);
			} 
			catch (PDOException $e) {
				//echo '<pre>' . $e . '</pre>';
				echo '';
			}
		}
	}
