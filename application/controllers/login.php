<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
			parent::__construct();
			$this->load->model('M_login');
		}

	public function index()
	{
		
		$this->load->view('v_login');
	}

	public function getlogin()
		{
			$user =$this->input->post('username',true);
			$pass =$this->input->post('password',true);
			$cek = $this->M_login->prosesLogin($user,$pass);
			$hasil = count($cek);
			if($hasil > 0){
				// $select = $this->db->get_where('user', array('username' => $user, 'password' =>$pass))->row();
				// $data = array('logged_in' => true, 'loger' => $select ->username);
				$this->session->userdata($hasil);
				redirect('Welcome');
			}else{
				$this->session->set_flashdata('error','user password salah');
				redirect('login');
			}

		}

	public function logout()
	{
		$this->load->view('v_login');
	}
}
?>