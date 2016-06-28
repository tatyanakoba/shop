<?php
include_once "controller.php";
include "application/model/model_shop.php";
include "application/view/view.php";
class Controller_shopProduct extends Controller 
{
	function __construct() {
		$this->model = new Model_Shop();
		$this->view = new View();
	}	
	function action_index()
	{
		$data = $this->model->showList();
		$this->view->generate('', 'shopProduct_list_view',$data);
	}
}