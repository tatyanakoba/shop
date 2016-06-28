<?php 
$filename = substr($_SERVER['SCRIPT_NAME'], strripos($_SERVER['SCRIPT_NAME'],'/')+1);

if(isset($_GET['showone'])) {
	include_once "application/controllers/controller_showProduct.php";
	$Product = new Controller_showProduct();
	$Product->action_index();
}else if (isset($_GET['admin'])) {
	include_once "application/controllers/controller_admins.php";
	$shopProduct = new Controller_admins();
	$shopProduct->action_index();
} else if (isset($_GET['sold'])) {
	include_once "application/controllers/controller_listProducts.php";
	$shopProduct = new Controller_listProducts();
	$shopProduct->action_index();
}  
else if (isset($_GET['show']) || $filename == 'index.php') {
	include_once "application/controllers/controller_shopProduct.php";
	$shopProduct = new Controller_shopProduct();
	$shopProduct->action_index();
} 