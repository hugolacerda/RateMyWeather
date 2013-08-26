<?php

	class DBConnector{
		
		private $db;
		
		function __construct(){
			$host = '127.0.0.1';
			$user = 'root';
			$pass = 'root';
			$port = '8889';
			$dbname = 'weatherRate';
			$this->db = new PDO("mysql:host=$host;
								 port=$port;
								 dbname=$dbname",
								 $user, $pass);
		
		}

	
	function addRate($post='', $date=''){
	$stmnt = $this->db->prepare("insert into rates(post, date) values (:post, :date)");
	$stmnt->execute(array(
		':post'=> $post,
		':date'=> $date,
		));
	}
}

?>