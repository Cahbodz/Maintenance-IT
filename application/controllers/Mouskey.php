<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mouskey extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_mouskey');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'mouskey/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'mouskey/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'mouskey/index.html';
            $config['first_url'] = base_url() . 'mouskey/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_mouskey->total_rows($q);
        $mouskey = $this->M_mouskey->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'mouskey_data' => $mouskey,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content']='mouskey/tb_mouskey_list';
        $this->load->view('welcome_message', $data);
    }

    public function read($id) 
    {
        $row = $this->M_mouskey->get_by_id($id);
        if ($row) {
            $data = array(
		'id_mouskey' => $row->id_mouskey,
		'unit' => $row->unit,
		'merek' => $row->merek,
		'jenis_usb' => $row->jenis_usb,
		'kondisi' => $row->kondisi,
	    );
            $data['content']='mouskey/tb_mouskey_read';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mouskey'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('mouskey/create_action'),
	    'id_mouskey' => set_value('id_mouskey'),
	    'unit' => set_value('unit'),
	    'merek' => set_value('merek'),
	    'jenis_usb' => set_value('jenis_usb'),
	    'kondisi' => set_value('kondisi'),
	);
        $data['content']='mouskey/tb_mouskey_form';
        $this->load->view('welcome_message', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'unit' => $this->input->post('unit',TRUE),
		'merek' => $this->input->post('merek',TRUE),
		'jenis_usb' => $this->input->post('jenis_usb',TRUE),
		'kondisi' => $this->input->post('kondisi',TRUE),
	    );

            $this->M_mouskey->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('mouskey'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_mouskey->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('mouskey/update_action'),
		'id_mouskey' => set_value('id_mouskey', $row->id_mouskey),
		'unit' => set_value('unit', $row->unit),
		'merek' => set_value('merek', $row->merek),
		'jenis_usb' => set_value('jenis_usb', $row->jenis_usb),
		'kondisi' => set_value('kondisi', $row->kondisi),
	    );
            $data['content']='mouskey/tb_mouskey_form';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mouskey'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_mouskey', TRUE));
        } else {
            $data = array(
		'unit' => $this->input->post('unit',TRUE),
		'merek' => $this->input->post('merek',TRUE),
		'jenis_usb' => $this->input->post('jenis_usb',TRUE),
		'kondisi' => $this->input->post('kondisi',TRUE),
	    );

            $this->M_mouskey->update($this->input->post('id_mouskey', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('mouskey'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_mouskey->get_by_id($id);

        if ($row) {
            $this->M_mouskey->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('mouskey'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mouskey'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('unit', 'unit', 'trim|required');
	$this->form_validation->set_rules('merek', 'merek', 'trim|required');
	$this->form_validation->set_rules('jenis_usb', 'jenis usb', 'trim|required');
	$this->form_validation->set_rules('kondisi', 'kondisi', 'trim|required');

	$this->form_validation->set_rules('id_mouskey', 'id_mouskey', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Mouskey.php */
/* Location: ./application/controllers/Mouskey.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-07-06 14:08:55 */
/* http://harviacode.com */