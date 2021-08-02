<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Log_kom extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_log_kom');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'log_kom/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'log_kom/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'log_kom/index.html';
            $config['first_url'] = base_url() . 'log_kom/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_log_kom->total_rows($q);
        $log_kom = $this->M_log_kom->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'log_kom_data' => $log_kom,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content']='log_kom/tb_log_kom_list';
        $this->load->view('welcome_message', $data);
    }

    public function read($id) 
    {
        $row = $this->M_log_kom->get_by_id($id);
        if ($row) {
            $data = array(
		'id_log' => $row->id_log,
		'id_komputer' => $row->id_komputer,
		'nama_user' => $row->nama_user,
		'kerusakan' => $row->kerusakan,
		'tindakan' => $row->tindakan,
		'ket' => $row->ket,
		'bagian' => $row->bagian,
		'nama_it' => $row->nama_it,
		'tgl_mulai' => $row->tgl_mulai,
		'tgl_selesai' => $row->tgl_selesai,
	    );
            $data['content']='log_kom/tb_log_kom_read';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('log_kom'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('log_kom/create_action'),
	    'id_log' => set_value('id_log'),
	    'id_komputer' => set_value('id_komputer'),
	    'nama_user' => set_value('nama_user'),
	    'kerusakan' => set_value('kerusakan'),
	    'tindakan' => set_value('tindakan'),
	    'ket' => set_value('ket'),
	    'bagian' => set_value('bagian'),
	    'nama_it' => set_value('nama_it'),
	    'tgl_mulai' => set_value('tgl_mulai'),
	    'tgl_selesai' => set_value('tgl_selesai'),
	);
        $data['content']='log_kom/tb_log_kom_form';
        $this->load->view('welcome_message', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_komputer' => $this->input->post('id_komputer',TRUE),
		'nama_user' => $this->input->post('nama_user',TRUE),
		'kerusakan' => $this->input->post('kerusakan',TRUE),
		'tindakan' => $this->input->post('tindakan',TRUE),
		'ket' => $this->input->post('ket',TRUE),
		'bagian' => $this->input->post('bagian',TRUE),
		'nama_it' => $this->input->post('nama_it',TRUE),
		'tgl_mulai' => $this->input->post('tgl_mulai',TRUE),
		'tgl_selesai' => $this->input->post('tgl_selesai',TRUE),
	    );

            $this->M_log_kom->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('log_kom'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_log_kom->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('log_kom/update_action'),
		'id_log' => set_value('id_log', $row->id_log),
		'id_komputer' => set_value('id_komputer', $row->id_komputer),
		'nama_user' => set_value('nama_user', $row->nama_user),
		'kerusakan' => set_value('kerusakan', $row->kerusakan),
		'tindakan' => set_value('tindakan', $row->tindakan),
		'ket' => set_value('ket', $row->ket),
		'bagian' => set_value('bagian', $row->bagian),
		'nama_it' => set_value('nama_it', $row->nama_it),
		'tgl_mulai' => set_value('tgl_mulai', $row->tgl_mulai),
		'tgl_selesai' => set_value('tgl_selesai', $row->tgl_selesai),
	    );
            $data['content']='log_kom/tb_log_kom_form';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('log_kom'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_log', TRUE));
        } else {
            $data = array(
		'id_komputer' => $this->input->post('id_komputer',TRUE),
		'nama_user' => $this->input->post('nama_user',TRUE),
		'kerusakan' => $this->input->post('kerusakan',TRUE),
		'tindakan' => $this->input->post('tindakan',TRUE),
		'ket' => $this->input->post('ket',TRUE),
		'bagian' => $this->input->post('bagian',TRUE),
		'nama_it' => $this->input->post('nama_it',TRUE),
		'tgl_mulai' => $this->input->post('tgl_mulai',TRUE),
		'tgl_selesai' => $this->input->post('tgl_selesai',TRUE),
	    );

            $this->M_log_kom->update($this->input->post('id_log', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('log_kom'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_log_kom->get_by_id($id);

        if ($row) {
            $this->M_log_kom->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('log_kom'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('log_kom'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_komputer', 'id komputer', 'trim|required');
	$this->form_validation->set_rules('nama_user', 'nama user', 'trim|required');
	$this->form_validation->set_rules('kerusakan', 'kerusakan', 'trim|required');
	$this->form_validation->set_rules('tindakan', 'tindakan', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');
	$this->form_validation->set_rules('bagian', 'bagian', 'trim|required');
	$this->form_validation->set_rules('nama_it', 'nama it', 'trim|required');
	$this->form_validation->set_rules('tgl_mulai', 'tgl mulai', 'trim|required');
	$this->form_validation->set_rules('tgl_selesai', 'tgl selesai', 'trim|required');

	$this->form_validation->set_rules('id_log', 'id_log', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

   
}



/* End of file Log_kom.php */
/* Location: ./application/controllers/Log_kom.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-03-16 07:59:14 */
/* http://harviacode.com */