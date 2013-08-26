<?php

class DBConnector {

	private $db;

	function __construct() {
		$host = '127.0.0.1';
		$user = 'root';
		$pass = 'root';
		$port = '8889';
		$dbName = 'project_ssl';
		$this->db = new PDO("mysql:host=$host; port=$port; dbname=$dbName", $user, $pass);
	}

	function addRate($post='', $date=''){
		$mySQL_statement = $this->db->prepare("insert into rates(post, date) values (:post, :date)");
		$mySQL_statement->execute(array(
			':post' => $post,
			':date' => $date
		));
	}

}

?>