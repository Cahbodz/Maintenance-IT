<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class M_login extends CI_Model {

	
	public function prosesLogin($user,$pass)
	{
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		return $this->db->get('tb_login')->row();

}
}

?>