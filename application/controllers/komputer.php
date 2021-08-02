<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Komputer extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_komputer');
		$this->load->library('form_validation');
        $this->load->library('Pdf');

	}

	public function index()
	{
		$q = urldecode($this->input->get('q', TRUE));
		$start = intval($this->input->get('start'));

		if ($q <> '') {
			$config['base_url'] = base_url() . 'komputer/index.html?q=' . urlencode($q);
			$config['first_url'] = base_url() . 'komputer/index.html?q=' . urlencode($q);
		} else {
			$config['base_url'] = base_url() . 'komputer/index.html';
			$config['first_url'] = base_url() . 'komputer/index.html';
		}

		$config['per_page'] = 100;
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->M_komputer->total_rows($q);
		$komputer = $this->M_komputer->get_limit_data($config['per_page'], $start, $q);

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$data = array(
			'komputer_data' => $komputer,
			'q' => $q,
			'pagination' => $this->pagination->create_links(),
			'total_rows' => $config['total_rows'],
			'start' => $start,
		);
		$data['content']='komputer/tb_komputer_list';
		$this->load->view('welcome_message', $data);
	}

	public function read($id) 
	{
		$row = $this->M_komputer->get_by_id($id);
		if ($row) {
			$data = array(
				'id_komputer' => $row->id_komputer,
				'ip_adres' => $row->ip_adres,
				'ip_gateway' => $row->ip_gateway,
				'nama_kom' => $row->nama_kom,
				'nama_user' => $row->nama_user,
				'jenis_inter' => $row->jenis_inter,
				'level_inter' => $row->level_inter,
				'jenis_deks_netbook' => $row->jenis_deks_netbook,
				'merek_deks_netbook' => $row->merek_deks_netbook,
				'tipe_deks_netbook' => $row->tipe_deks_netbook,
				'os' => $row->os,
				'merek_monit' => $row->merek_monit,
				'size_monit' => $row->size_monit,
				'merek_procesr' => $row->merek_procesr,
				'tipe_procesr' => $row->tipe_procesr,
				'speed_procesr' => $row->speed_procesr,
				'amount_ram' => $row->amount_ram,
				'tipe_ram' => $row->tipe_ram,
				'merek_hards' => $row->merek_hards,
				'size_hards' => $row->size_hards,
				'merek_grapc' => $row->merek_grapc,
				'tipe_grapc' => $row->tipe_grapc,
				'memory_grapc' => $row->memory_grapc,
				'mobo' => $row->mobo,
				'power_suply' => $row->power_suply,
				'mouse' => $row->mouse,
				'keyboard' => $row->keyboard,
				'apk_terinstall' => $row->apk_terinstall,
				'ups' => $row->ups,
			);
			$data['content']='komputer/tb_komputer_read';
			$this->load->view('welcome_message', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('komputer'));
		}
	}

	public function create() 
	{
		$data = array(
			'button' => 'Create',
			'action' => site_url('komputer/create_action'),
			'id_komputer' => set_value('id_komputer'),
			'ip_adres' => set_value('ip_adres'),
			'ip_gateway' => set_value('ip_gateway'),
			'nama_kom' => set_value('nama_kom'),
			'nama_user' => set_value('nama_user'),
			'jenis_inter' => set_value('jenis_inter'),
			'level_inter' => set_value('level_inter'),
			'jenis_deks_netbook' => set_value('jenis_deks_netbook'),
			'merek_deks_netbook' => set_value('merek_deks_netbook'),
			'tipe_deks_netbook' => set_value('tipe_deks_netbook'),
			'os' => set_value('os'),
			'merek_monit' => set_value('merek_monit'),
			'size_monit' => set_value('size_monit'),
			'merek_procesr' => set_value('merek_procesr'),
			'tipe_procesr' => set_value('tipe_procesr'),
			'speed_procesr' => set_value('speed_procesr'),
			'amount_ram' => set_value('amount_ram'),
			'tipe_ram' => set_value('tipe_ram'),
			'merek_hards' => set_value('merek_hards'),
			'size_hards' => set_value('size_hards'),
			'merek_grapc' => set_value('merek_grapc'),
			'tipe_grapc' => set_value('tipe_grapc'),
			'memory_grapc' => set_value('memory_grapc'),
			'mobo' => set_value('mobo'),
			'power_suply' => set_value('power_suply'),
			'mouse' => set_value('mouse'),
			'keyboard' => set_value('keyboard'),
			'apk_terinstall' => set_value('apk_terinstall'),
			'ups' => set_value('ups'),
		);
		$data['content']='komputer/tb_komputer_form';
		$this->load->view('welcome_message', $data);
	}

	public function create_action() 
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			$data = array(
				'ip_adres' => $this->input->post('ip_adres',TRUE),
				'ip_gateway' => $this->input->post('ip_gateway',TRUE),
				'nama_kom' => $this->input->post('nama_kom',TRUE),
				'nama_user' => $this->input->post('nama_user',TRUE),
				'jenis_inter' => $this->input->post('jenis_inter',TRUE),
				'level_inter' => $this->input->post('level_inter',TRUE),
				'jenis_deks_netbook' => $this->input->post('jenis_deks_netbook',TRUE),
				'merek_deks_netbook' => $this->input->post('merek_deks_netbook',TRUE),
				'tipe_deks_netbook' => $this->input->post('tipe_deks_netbook',TRUE),
				'os' => $this->input->post('os',TRUE),
				'merek_monit' => $this->input->post('merek_monit',TRUE),
				'size_monit' => $this->input->post('size_monit',TRUE),
				'merek_procesr' => $this->input->post('merek_procesr',TRUE),
				'tipe_procesr' => $this->input->post('tipe_procesr',TRUE),
				'speed_procesr' => $this->input->post('speed_procesr',TRUE),
				'amount_ram' => $this->input->post('amount_ram',TRUE),
				'tipe_ram' => $this->input->post('tipe_ram',TRUE),
				'merek_hards' => $this->input->post('merek_hards',TRUE),
				'size_hards' => $this->input->post('size_hards',TRUE),
				'merek_grapc' => $this->input->post('merek_grapc',TRUE),
				'tipe_grapc' => $this->input->post('tipe_grapc',TRUE),
				'memory_grapc' => $this->input->post('memory_grapc',TRUE),
				'mobo' => $this->input->post('mobo',TRUE),
				'power_suply' => $this->input->post('power_suply',TRUE),
				'mouse' => $this->input->post('mouse',TRUE),
				'keyboard' => $this->input->post('keyboard',TRUE),
				'apk_terinstall' => $this->input->post('apk_terinstall',TRUE),
				'ups' => $this->input->post('ups',TRUE),
			);

			$this->M_komputer->insert($data);
			$this->session->set_flashdata('message', 'Create Record Success');
			redirect(site_url('komputer'));
		}
	}

	public function update($id) 
	{
		$row = $this->M_komputer->get_by_id($id);

		if ($row) {
			$data = array(
				'button' => 'Update',
				'action' => site_url('komputer/update_action'),
				'id_komputer' => set_value('id_komputer', $row->id_komputer),
				'ip_adres' => set_value('ip_adres', $row->ip_adres),
				'ip_gateway' => set_value('ip_gateway', $row->ip_gateway),
				'nama_kom' => set_value('nama_kom', $row->nama_kom),
				'nama_user' => set_value('nama_user', $row->nama_user),
				'jenis_inter' => set_value('jenis_inter', $row->jenis_inter),
				'level_inter' => set_value('level_inter', $row->level_inter),
				'jenis_deks_netbook' => set_value('jenis_deks_netbook', $row->jenis_deks_netbook),
				'merek_deks_netbook' => set_value('merek_deks_netbook', $row->merek_deks_netbook),
				'tipe_deks_netbook' => set_value('tipe_deks_netbook', $row->tipe_deks_netbook),
				'os' => set_value('os', $row->os),
				'merek_monit' => set_value('merek_monit', $row->merek_monit),
				'size_monit' => set_value('size_monit', $row->size_monit),
				'merek_procesr' => set_value('merek_procesr', $row->merek_procesr),
				'tipe_procesr' => set_value('tipe_procesr', $row->tipe_procesr),
				'speed_procesr' => set_value('speed_procesr', $row->speed_procesr),
				'amount_ram' => set_value('amount_ram', $row->amount_ram),
				'tipe_ram' => set_value('tipe_ram', $row->tipe_ram),
				'merek_hards' => set_value('merek_hards', $row->merek_hards),
				'size_hards' => set_value('size_hards', $row->size_hards),
				'merek_grapc' => set_value('merek_grapc', $row->merek_grapc),
				'tipe_grapc' => set_value('tipe_grapc', $row->tipe_grapc),
				'memory_grapc' => set_value('memory_grapc', $row->memory_grapc),
				'mobo' => set_value('mobo', $row->mobo),
				'power_suply' => set_value('power_suply', $row->power_suply),
				'mouse' => set_value('mouse', $row->mouse),
				'keyboard' => set_value('keyboard', $row->keyboard),
				'apk_terinstall' => set_value('apk_terinstall', $row->apk_terinstall),
				'ups' => set_value('ups', $row->ups),
			);
			$data['content']='komputer/tb_komputer_form';
			$this->load->view('welcome_message', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('komputer'));
		}
	}

	public function update_action() 
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update($this->input->post('id_komputer', TRUE));
		} else {
			$data = array(
				'ip_adres' => $this->input->post('ip_adres',TRUE),
				'ip_gateway' => $this->input->post('ip_gateway',TRUE),
				'nama_kom' => $this->input->post('nama_kom',TRUE),
				'nama_user' => $this->input->post('nama_user',TRUE),
				'jenis_inter' => $this->input->post('jenis_inter',TRUE),
				'level_inter' => $this->input->post('level_inter',TRUE),
				'jenis_deks_netbook' => $this->input->post('jenis_deks_netbook',TRUE),
				'merek_deks_netbook' => $this->input->post('merek_deks_netbook',TRUE),
				'tipe_deks_netbook' => $this->input->post('tipe_deks_netbook',TRUE),
				'os' => $this->input->post('os',TRUE),
				'merek_monit' => $this->input->post('merek_monit',TRUE),
				'size_monit' => $this->input->post('size_monit',TRUE),
				'merek_procesr' => $this->input->post('merek_procesr',TRUE),
				'tipe_procesr' => $this->input->post('tipe_procesr',TRUE),
				'speed_procesr' => $this->input->post('speed_procesr',TRUE),
				'amount_ram' => $this->input->post('amount_ram',TRUE),
				'tipe_ram' => $this->input->post('tipe_ram',TRUE),
				'merek_hards' => $this->input->post('merek_hards',TRUE),
				'size_hards' => $this->input->post('size_hards',TRUE),
				'merek_grapc' => $this->input->post('merek_grapc',TRUE),
				'tipe_grapc' => $this->input->post('tipe_grapc',TRUE),
				'memory_grapc' => $this->input->post('memory_grapc',TRUE),
				'mobo' => $this->input->post('mobo',TRUE),
				'power_suply' => $this->input->post('power_suply',TRUE),
				'mouse' => $this->input->post('mouse',TRUE),
				'keyboard' => $this->input->post('keyboard',TRUE),
				'apk_terinstall' => $this->input->post('apk_terinstall',TRUE),
				'ups' => $this->input->post('ups',TRUE),
			);

			$this->M_komputer->update($this->input->post('id_komputer', TRUE), $data);
			$this->session->set_flashdata('message', 'Update Record Success');
			redirect(site_url('komputer'));
		}
	}

	public function delete($id) 
	{
		$row = $this->M_komputer->get_by_id($id);

		if ($row) {
			$this->M_komputer->delete($id);
			$this->session->set_flashdata('message', 'Delete Record Success');
			redirect(site_url('komputer'));
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('komputer'));
		}
	}

	public function _rules() 
	{
		$this->form_validation->set_rules('ip_adres', 'ip adres', 'trim|required');
		$this->form_validation->set_rules('ip_gateway', 'ip gateway', 'trim|required');
		$this->form_validation->set_rules('nama_kom', 'nama kom', 'trim|required');
		$this->form_validation->set_rules('nama_user', 'nama user', 'trim|required');
		$this->form_validation->set_rules('jenis_inter', 'jenis inter', 'trim|required');
		$this->form_validation->set_rules('level_inter', 'level inter', 'trim|required');
		$this->form_validation->set_rules('jenis_deks_netbook', 'jenis deks netbook', 'trim|required');
		$this->form_validation->set_rules('merek_deks_netbook', 'merek deks netbook', 'trim|required');
		$this->form_validation->set_rules('tipe_deks_netbook', 'tipe deks netbook', 'trim|required');
		$this->form_validation->set_rules('os', 'os', 'trim|required');
		$this->form_validation->set_rules('merek_monit', 'merek monit', 'trim|required');
		$this->form_validation->set_rules('size_monit', 'size monit', 'trim|required');
		$this->form_validation->set_rules('merek_procesr', 'merek procesr', 'trim|required');
		$this->form_validation->set_rules('tipe_procesr', 'tipe procesr', 'trim|required');
		$this->form_validation->set_rules('speed_procesr', 'speed procesr', 'trim|required');
		$this->form_validation->set_rules('amount_ram', 'amount ram', 'trim|required');
		$this->form_validation->set_rules('tipe_ram', 'tipe ram', 'trim|required');
		$this->form_validation->set_rules('merek_hards', 'merek hards', 'trim|required');
		$this->form_validation->set_rules('size_hards', 'size hards', 'trim|required');
		$this->form_validation->set_rules('merek_grapc', 'merek grapc', 'trim|required');
		$this->form_validation->set_rules('tipe_grapc', 'tipe grapc', 'trim|required');
		$this->form_validation->set_rules('memory_grapc', 'memory grapc', 'trim|required');
		$this->form_validation->set_rules('mobo', 'mobo', 'trim|required');
		$this->form_validation->set_rules('power_suply', 'power suply', 'trim|required');
		$this->form_validation->set_rules('mouse', 'mouse', 'trim|required');
		$this->form_validation->set_rules('keyboard', 'keyboard', 'trim|required');
		$this->form_validation->set_rules('apk_terinstall', 'apk terinstall', 'trim|required');
		$this->form_validation->set_rules('ups', 'ups', 'trim|required');

		$this->form_validation->set_rules('id_komputer', 'id_komputer', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}

	public function excel()
	{
		$this->load->helper('exportexcel');
		$namaFile = "tb_komputer.xls";
		$judul = "tb_komputer";
		$tablehead = 0;
		$tablebody = 1;
		$nourut = 1;
        //penulisan header
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
		header("Content-Disposition: attachment;filename=" . $namaFile . "");
		header("Content-Transfer-Encoding: binary ");

		xlsBOF();

		$kolomhead = 0;
		xlsWriteLabel($tablehead, $kolomhead++, "No");
		xlsWriteLabel($tablehead, $kolomhead++, "Ip Adres");
		xlsWriteLabel($tablehead, $kolomhead++, "Ip Gateway");
		xlsWriteLabel($tablehead, $kolomhead++, "Nama Kom");
		xlsWriteLabel($tablehead, $kolomhead++, "Nama User");
		xlsWriteLabel($tablehead, $kolomhead++, "Jenis Inter");
		xlsWriteLabel($tablehead, $kolomhead++, "Level Inter");
		xlsWriteLabel($tablehead, $kolomhead++, "Jenis Deks Netbook");
		xlsWriteLabel($tablehead, $kolomhead++, "Merek Deks Netbook");
		xlsWriteLabel($tablehead, $kolomhead++, "Tipe Deks Netbook");
		xlsWriteLabel($tablehead, $kolomhead++, "Os");
		xlsWriteLabel($tablehead, $kolomhead++, "Merek Monit");
		xlsWriteLabel($tablehead, $kolomhead++, "Size Monit");
		xlsWriteLabel($tablehead, $kolomhead++, "Merek Procesr");
		xlsWriteLabel($tablehead, $kolomhead++, "Tipe Procesr");
		xlsWriteLabel($tablehead, $kolomhead++, "Speed Procesr");
		xlsWriteLabel($tablehead, $kolomhead++, "Amount Ram");
		xlsWriteLabel($tablehead, $kolomhead++, "Tipe Ram");
		xlsWriteLabel($tablehead, $kolomhead++, "Merek Hards");
		xlsWriteLabel($tablehead, $kolomhead++, "Size Hards");
		xlsWriteLabel($tablehead, $kolomhead++, "Merek Grapc");
		xlsWriteLabel($tablehead, $kolomhead++, "Tipe Grapc");
		xlsWriteLabel($tablehead, $kolomhead++, "Memory Grapc");
		xlsWriteLabel($tablehead, $kolomhead++, "Mobo");
		xlsWriteLabel($tablehead, $kolomhead++, "Power Suply");
		xlsWriteLabel($tablehead, $kolomhead++, "Mouse");
		xlsWriteLabel($tablehead, $kolomhead++, "Keyboard");
		xlsWriteLabel($tablehead, $kolomhead++, "Apk Terinstall");
		xlsWriteLabel($tablehead, $kolomhead++, "Ups");

		foreach ($this->M_komputer->get_all() as $data) {
			$kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
			xlsWriteNumber($tablebody, $kolombody++, $nourut);
			xlsWriteLabel($tablebody, $kolombody++, $data->ip_adres);
			xlsWriteLabel($tablebody, $kolombody++, $data->ip_gateway);
			xlsWriteLabel($tablebody, $kolombody++, $data->nama_kom);
			xlsWriteLabel($tablebody, $kolombody++, $data->nama_user);
			xlsWriteLabel($tablebody, $kolombody++, $data->jenis_inter);
			xlsWriteLabel($tablebody, $kolombody++, $data->level_inter);
			xlsWriteLabel($tablebody, $kolombody++, $data->jenis_deks_netbook);
			xlsWriteLabel($tablebody, $kolombody++, $data->merek_deks_netbook);
			xlsWriteLabel($tablebody, $kolombody++, $data->tipe_deks_netbook);
			xlsWriteLabel($tablebody, $kolombody++, $data->os);
			xlsWriteLabel($tablebody, $kolombody++, $data->merek_monit);
			xlsWriteLabel($tablebody, $kolombody++, $data->size_monit);
			xlsWriteLabel($tablebody, $kolombody++, $data->merek_procesr);
			xlsWriteLabel($tablebody, $kolombody++, $data->tipe_procesr);
			xlsWriteLabel($tablebody, $kolombody++, $data->speed_procesr);
			xlsWriteLabel($tablebody, $kolombody++, $data->amount_ram);
			xlsWriteLabel($tablebody, $kolombody++, $data->tipe_ram);
			xlsWriteLabel($tablebody, $kolombody++, $data->merek_hards);
			xlsWriteLabel($tablebody, $kolombody++, $data->size_hards);
			xlsWriteLabel($tablebody, $kolombody++, $data->merek_grapc);
			xlsWriteLabel($tablebody, $kolombody++, $data->tipe_grapc);
			xlsWriteLabel($tablebody, $kolombody++, $data->memory_grapc);
			xlsWriteLabel($tablebody, $kolombody++, $data->mobo);
			xlsWriteLabel($tablebody, $kolombody++, $data->power_suply);
			xlsWriteLabel($tablebody, $kolombody++, $data->mouse);
			xlsWriteLabel($tablebody, $kolombody++, $data->keyboard);
			xlsWriteLabel($tablebody, $kolombody++, $data->apk_terinstall);
			xlsWriteLabel($tablebody, $kolombody++, $data->ups);

			$tablebody++;
			$nourut++;
		}

		xlsEOF();
		exit();
	}

	public function cari(){
		$data['content']       ='komputer/tb_komputer_list';
		$data['pilih']         = $this->input->post('pilih');
		$data['detail']        = $this->input->post('detail');
		$data['komputer_data']   =$this->M_komputer->carii($data['pilih'],$data['detail'])->result();
		$data['jumlah']        = empty('komputer_data') ? "empty or may be null" : "hey, there's something in this object";
		$this->load->view('welcome_message',$data);
	}

	public function pdf($id) 
	{
		$row = $this->M_komputer->get_by_id($id);
		if ($row) {
			$data = array(
				'id_komputer' => $row->id_komputer,
				'ip_adres' => $row->ip_adres,
				'ip_gateway' => $row->ip_gateway,
				'nama_kom' => $row->nama_kom,
				'nama_user' => $row->nama_user,
				'jenis_inter' => $row->jenis_inter,
				'level_inter' => $row->level_inter,
				'jenis_deks_netbook' => $row->jenis_deks_netbook,
				'merek_deks_netbook' => $row->merek_deks_netbook,
				'tipe_deks_netbook' => $row->tipe_deks_netbook,
				'os' => $row->os,
				'merek_monit' => $row->merek_monit,
				'size_monit' => $row->size_monit,
				'merek_procesr' => $row->merek_procesr,
				'tipe_procesr' => $row->tipe_procesr,
				'speed_procesr' => $row->speed_procesr,
				'amount_ram' => $row->amount_ram,
				'tipe_ram' => $row->tipe_ram,
				'merek_hards' => $row->merek_hards,
				'size_hards' => $row->size_hards,
				'merek_grapc' => $row->merek_grapc,
				'tipe_grapc' => $row->tipe_grapc,
				'memory_grapc' => $row->memory_grapc,
				'mobo' => $row->mobo,
				'power_suply' => $row->power_suply,
				'mouse' => $row->mouse,
				'keyboard' => $row->keyboard,
				'apk_terinstall' => $row->apk_terinstall,
				'ups' => $row->ups,
			);
		
			$this->load->view('komputer/laporan_pdf', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('komputer'));
		}
	}

}

/* End of file Komputer.php */
/* Location: ./application/controllers/Komputer.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-03-15 05:31:40 */
/* http://harviacode.com */