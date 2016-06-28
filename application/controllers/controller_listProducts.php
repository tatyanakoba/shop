<?php
include_once "controller.php";
include "application/model/model_shop.php";
include "application/view/view.php";
class Controller_listProducts extends Controller 
{
	function __construct() {
		$this->model = new Model_Shop();
		$this->view = new View();
	}	
	function action_index()
	{
		$data = $this->model->showListSoldProduct();
		$this->view->generate('','listProducts_view',$data);
	}
}
