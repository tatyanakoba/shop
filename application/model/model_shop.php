<?php
	include_once 'model.php';
	include_once 'db.php';
	
	
	class Model_Shop extends Model {
		public function __construct() {
			$this->db = new Database();
		}
		
		public function showList() {
			$data = $this->db->query("SELECT * FROM Products");
			return $data->fetchAll();
		}
		public function showoneProduct($id) {
			$data = $this->db->query("SELECT * FROM Products WHERE id=$id");
			return $data->fetchAll();
		}
		
		public function getComments($id) {
		$data = $this->db->query("SELECT name, comment FROM Comments WHERE product_id=$id");
		return $data->fetchAll();
		}

		public function showListSoldProduct() {
		$data = $this->db->query("SELECT products.name product, clients.name, clients.surname, clients.phone  
								FROM soldproduct 
								JOIN products 
								ON products.id=soldproduct.id_product
								JOIN clients
								ON clients.id=soldproduct.id_client
								");
		return $data->fetchAll();
		}
	}
