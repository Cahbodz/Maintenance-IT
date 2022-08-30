<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Toner extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_toner');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'toner/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'toner/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'toner/index.html';
            $config['first_url'] = base_url() . 'toner/index.html';
        }

        $config['per_page'] = 10000;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_toner->total_rows($q);
        $toner = $this->M_toner->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'toner_data' => $toner,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content']='toner/tb_toner_list';
        $this->load->view('welcome_message', $data);
    }

    public function read($id) 
    {
        $row = $this->M_toner->get_by_id($id);
        if ($row) {
            $data = array(
		'id_toner' => $row->id_toner,
		'nama_printer' => $row->nama_printer,
		'user' => $row->user,
		'tgl_beli' => $row->tgl_beli,
	    );
            $data['content']='toner/tb_toner_list';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('toner'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('toner/create_action'),
	    'id_toner' => set_value('id_toner'),
	    'nama_printer' => set_value('nama_printer'),
	    'user' => set_value('user'),
	    'tgl_beli' => set_value('tgl_beli'),
	);
        $data['content']='toner/tb_toner_form';
        $this->load->view('welcome_message', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_printer' => $this->input->post('nama_printer',TRUE),
		'user' => $this->input->post('user',TRUE),
		'tgl_beli' => $this->input->post('tgl_beli',TRUE),
	    );

            $this->M_toner->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('toner'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_toner->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('toner/update_action'),
		'id_toner' => set_value('id_toner', $row->id_toner),
		'nama_printer' => set_value('nama_printer', $row->nama_printer),
		'user' => set_value('user', $row->user),
		'tgl_beli' => set_value('tgl_beli', $row->tgl_beli),
	    );
            $data['content']='toner/tb_toner_form';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('toner'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_toner', TRUE));
        } else {
            $data = array(
		'nama_printer' => $this->input->post('nama_printer',TRUE),
		'user' => $this->input->post('user',TRUE),
		'tgl_beli' => $this->input->post('tgl_beli',TRUE),
	    );

            $this->M_toner->update($this->input->post('id_toner', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('toner'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_toner->get_by_id($id);

        if ($row) {
            $this->M_toner->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('toner'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('toner'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_printer', 'nama printer', 'trim|required');
	$this->form_validation->set_rules('user', 'user', 'trim|required');
	$this->form_validation->set_rules('tgl_beli', 'tgl beli', 'trim|required');

	$this->form_validation->set_rules('id_toner', 'id_toner', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Toner.php */
/* Location: ./application/controllers/Toner.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-07-06 10:18:53 */
/* http://harviacode.com */