<?php
	class Info_resto extends CI_Controller{

		public function __construct (){

			parent::__construct();

			$this->load->database();
		}

		public function index(){

			$this->info();
		}

		public function info(){

			$this->load->model("info_resto_dao", "info_dao");

			$data["info_resto"] = $this->info_dao->info_resto();
			$data["info_items"] = $this->info_dao->info_items();

			$this->load->view("vue_resto", $data);
		}
		
	}
?>