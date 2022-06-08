<?php 
	class home extends CI_Controller {
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			echo "ini controler home";
			$this->load->view('v_home');
		}
	}