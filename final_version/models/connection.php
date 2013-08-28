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

	function addRate($post='', $date='', $state='', $city='') {
		$stmnt = $this->db->prepare("insert into rates(post, date, state, city) values (:post, :date, :state, :city)");
		$stmnt->execute(array(
		':post'=> $post,
		':date'=> $date,
		':state' => $state,
		':city' => $city
		));
	}

	function getRate($city=''){
		$mySQL_statement = $this->db->query("select post from rates where city='".$city."'");
		return $mySQL_statement->fetchAll(PDO::FETCH_ASSOC);
	}

}

?>