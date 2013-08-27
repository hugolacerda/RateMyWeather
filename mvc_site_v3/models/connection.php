<?php

class DBConnector {

	private $db;

	function __construct() {
		$host = '127.0.0.1';
		$user = 'root';
		$pass = 'root';
		$port = '8889';
		$dbName = 'weatherRate';
		$this->db = new PDO("mysql:host=$host; port=$port; dbname=$dbName", $user, $pass);
	}

	function addRate($post='', $date='') {
		$stmnt = $this->db->prepare("insert into rates(post, date) values (:post, :date)");
		$stmnt->execute(array(
		':post'=> $post,
		':date'=> $date
		));
	}

	function getRate(){
		$mySQL_statement = $this->db->query("select post from rates");
		return $mySQL_statement->fetchAll(PDO::FETCH_ASSOC);
	}

}

?>