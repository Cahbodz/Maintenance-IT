<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Monitor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_monitor');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'monitor/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'monitor/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'monitor/index.html';
            $config['first_url'] = base_url() . 'monitor/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_monitor->total_rows($q);
        $monitor = $this->M_monitor->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'monitor_data' => $monitor,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content']='monitor/tb_monitor_list';
        $this->load->view('welcome_message', $data);
    }

    public function read($id) 
    {
        $row = $this->M_monitor->get_by_id($id);
        if ($row) {
            $data = array(
		'id_monitor' => $row->id_monitor,
		'kode_barang' => $row->kode_barang,
		'merek' => $row->merek,
		'model' => $row->model,
		'kondisi' => $row->kondisi,
		'ket' => $row->ket,
		'size' => $row->size,
	    );
            $data['content']='monitor/tb_monitor_read';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('monitor'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('monitor/create_action'),
	    'id_monitor' => set_value('id_monitor'),
	    'kode_barang' => set_value('kode_barang'),
	    'merek' => set_value('merek'),
	    'model' => set_value('model'),
	    'kondisi' => set_value('kondisi'),
	    'ket' => set_value('ket'),
	    'size' => set_value('size'),
	);
    $data['content']='monitor/tb_monitor_form';
        $this->load->view('welcome_message', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_barang' => $this->input->post('kode_barang',TRUE),
		'merek' => $this->input->post('merek',TRUE),
		'model' => $this->input->post('model',TRUE),
		'kondisi' => $this->input->post('kondisi',TRUE),
		'ket' => $this->input->post('ket',TRUE),
		'size' => $this->input->post('size',TRUE),
	    );

            $this->M_monitor->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('monitor'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_monitor->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('monitor/update_action'),
		'id_monitor' => set_value('id_monitor', $row->id_monitor),
		'kode_barang' => set_value('kode_barang', $row->kode_barang),
		'merek' => set_value('merek', $row->merek),
		'model' => set_value('model', $row->model),
		'kondisi' => set_value('kondisi', $row->kondisi),
		'ket' => set_value('ket', $row->ket),
		'size' => set_value('size', $row->size),
	    );
            $data['content']='monitor/tb_monitor_form';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('monitor'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_monitor', TRUE));
        } else {
            $data = array(
		'kode_barang' => $this->input->post('kode_barang',TRUE),
		'merek' => $this->input->post('merek',TRUE),
		'model' => $this->input->post('model',TRUE),
		'kondisi' => $this->input->post('kondisi',TRUE),
		'ket' => $this->input->post('ket',TRUE),
		'size' => $this->input->post('size',TRUE),
	    );

            $this->M_monitor->update($this->input->post('id_monitor', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('monitor'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_monitor->get_by_id($id);

        if ($row) {
            $this->M_monitor->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('monitor'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('monitor'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_barang', 'kode barang', 'trim|required');
	$this->form_validation->set_rules('merek', 'merek', 'trim|required');
	$this->form_validation->set_rules('model', 'model', 'trim|required');
	$this->form_validation->set_rules('kondisi', 'kondisi', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');
	$this->form_validation->set_rules('size', 'size', 'trim|required');

	$this->form_validation->set_rules('id_monitor', 'id_monitor', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tb_monitor.xls";
        $judul = "tb_monitor";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Barang");
	xlsWriteLabel($tablehead, $kolomhead++, "Merek");
	xlsWriteLabel($tablehead, $kolomhead++, "Model");
	xlsWriteLabel($tablehead, $kolomhead++, "Kondisi");
	xlsWriteLabel($tablehead, $kolomhead++, "Ket");
	xlsWriteLabel($tablehead, $kolomhead++, "Size");

	foreach ($this->M_monitor->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kode_barang);
	    xlsWriteLabel($tablebody, $kolombody++, $data->merek);
	    xlsWriteLabel($tablebody, $kolombody++, $data->model);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kondisi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ket);
	    xlsWriteLabel($tablebody, $kolombody++, $data->size);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Monitor.php */
/* Location: ./application/controllers/Monitor.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-07-05 09:59:14 */
/* http://harviacode.com */