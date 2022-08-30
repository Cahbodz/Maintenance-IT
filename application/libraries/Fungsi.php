<?php

	Class Fungsi {
		protected $ci;

		public function __construct() {
			$this->ci =& get_instance();
		}

		function User_login() {
			$this->ci->load->model('M_login');
			$user_id =$this->ci->session->userdata('userid');
			$user_data = $this->ci->M_login->get($user_id);
			return $user_data;
		}
	}

?>