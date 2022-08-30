<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ram extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_ram');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'ram/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'ram/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'ram/index.html';
            $config['first_url'] = base_url() . 'ram/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_ram->total_rows($q);
        $ram = $this->M_ram->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'ram_data' => $ram,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content']='ram/tb_ram_list';
        $this->load->view('welcome_message', $data);
    }

    public function read($id) 
    {
        $row = $this->M_ram->get_by_id($id);
        if ($row) {
            $data = array(
		'id_ram' => $row->id_ram,
		'tipe' => $row->tipe,
		'kapasitas' => $row->kapasitas,
		'tipePc' => $row->tipe-pc,
		'jenis_ram' => $row->jenis_ram,
	    );
            $data['content']='ram/tb_ram_read';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ram'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('ram/create_action'),
	    'id_ram' => set_value('id_ram'),
	    'tipe' => set_value('tipe'),
	    'kapasitas' => set_value('kapasitas'),
	    'tipePc' => set_value('tipePc'),
	    'jenis_ram' => set_value('jenis_ram'),
	);
        $data['content']='ram/tb_ram_form';
        $this->load->view('welcome_message', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tipe' => $this->input->post('tipe',TRUE),
		'kapasitas' => $this->input->post('kapasitas',TRUE),
		'tipePc' => $this->input->post('tipePc',TRUE),
		'jenis_ram' => $this->input->post('jenis_ram',TRUE),
	    );

            $this->M_ram->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ram'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_ram->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ram/update_action'),
		'id_ram' => set_value('id_ram', $row->id_ram),
		'tipe' => set_value('tipe', $row->tipe),
		'kapasitas' => set_value('kapasitas', $row->kapasitas),
		'tipePc' => set_value('tipePc', $row->tipe-pc),
		'jenis_ram' => set_value('jenis_ram', $row->jenis_ram),
	    );
            $data['content']='ram/tb_ram_form';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ram'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_ram', TRUE));
        } else {
            $data = array(
		'tipe' => $this->input->post('tipe',TRUE),
		'kapasitas' => $this->input->post('kapasitas',TRUE),
		'tipePc' => $this->input->post('tipePc',TRUE),
		'jenis_ram' => $this->input->post('jenis_ram',TRUE),
	    );

            $this->M_ram->update($this->input->post('id_ram', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ram'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_ram->get_by_id($id);

        if ($row) {
            $this->M_ram->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ram'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ram'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tipe', 'tipe', 'trim|required');
	$this->form_validation->set_rules('kapasitas', 'kapasitas', 'trim|required');
	$this->form_validation->set_rules('tipePc', 'tipePc', 'trim|required');
	$this->form_validation->set_rules('jenis_ram', 'jenis ram', 'trim|required');

	$this->form_validation->set_rules('id_ram', 'id_ram', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Ram.php */
/* Location: ./application/controllers/Ram.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-07-06 13:53:55 */
/* http://harviacode.com */