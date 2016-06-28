<?php
class Controller
{
	public $model;
	public $view;
	
	function __constructor()
	{
		$this->view = new View();
	}

	function action_index()
	{
	}
}
