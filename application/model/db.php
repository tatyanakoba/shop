<?php
	class Database extends PDO {
		public function __construct() {
			$dsn = 'mysql:dbname=shop;host=127.0.0.1';
			$user = 'root';
			$password = '';

			try {
				//$dbh = new PDO($dsn, $user, $password);
				$dbh = parent::__construct($dsn, $user, $password);
			} catch (PDOException $e) {
				echo 'Подключение не удалось: ' . $e->getMessage();
			}
			return $dbh;
		}
	}