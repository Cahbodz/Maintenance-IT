<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		
		$this->load->view('v_login');
	}

	public function proses()
	{
		$post = $this->input->post(nuLL, TRUE);
		if(isset($post['login'])){
			$this->load->model('M_user');
			$query =$this->M_user->login($post);
			if($query->num_rows() > 0) {
				echo "login berhasil";
			}else{
			echo "login gagal";
			}
		}
  	}
}
?>