<?php
include_once "controller.php";
include "application/model/model_shop.php";
include "application/view/view.php";
class Controller_showProduct extends Controller 
{
	function __construct() {
		$this->model = new Model_Shop();
		$this->view = new View();
	}	
	function action_index()
	{
		$product_id = $_GET['showone'];
		$data['flower']['product'] = $this->model->showOneProduct($product_id);
		$data['flower']['comments'] = $this->model->getComments($product_id);
		$this->view->generate('', 'showProduct_view',$data);
	}
}