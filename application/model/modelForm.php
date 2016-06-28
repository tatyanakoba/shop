<?php
	include_once 'db.php';
	if (isset($_GET['auth'])) {
		auth();
	}
	elseif (isset($_GET['addClient'])) {
		addClient();
	}
	elseif (isset($_GET['addComment'])) {
		addComment();
	}
	elseif (isset($_GET['addProduct'])) {
		addProduct();
	}
	function addClient(){
		$db = new Database();
		$data = $db->query("INSERT INTO Clients(name,surname,phone) VALUES('".$_POST['Name']."', '".$_POST['SurName']."', '".$_POST['Phone']."')");
		$client_id = $db->lastInsertId();
		$data = $db->query("INSERT INTO soldproduct(id_client,id_product) VALUES('".$client_id."', '".$_GET['id']."')");
		header('Location: /shop');
	}
	
	function addComment(){
		$db = new Database();
		$data = $db->query("INSERT INTO Comments(name,product_id,comment) VALUES('".$_POST['Name']."', '".$_GET['id']."', '".$_POST['Comment']."')");
		header('Location: /shop/?showone='.$_GET['id']);	
	}
	
	function auth(){
		$login=$_POST['login'];
		$password=$_POST['password'];
		$db = new Database();
		$data = $db->query("SELECT * FROM admins WHERE login='$login' AND password=$password");
		if (!empty($data->fetchAll())){
			header('Location: /shop/index.php?sold');
		}
		else die('Такого администратора нет');
	}

	function addProduct(){
		$db = new Database();
		$img = addslashes(fread(fopen($_FILES['photo']['tmp_name'], "rb"), $_FILES['photo']['size']));
		$data = $db->query("INSERT INTO Products(name,description,photo) VALUES('".$_POST['name']."',  '".$_POST['description']."',  '".$img."')");
	}
