<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Log_printer extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_log_printer');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'log_printer/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'log_printer/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'log_printer/index.html';
            $config['first_url'] = base_url() . 'log_printer/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_log_printer->total_rows($q);
        $log_printer = $this->M_log_printer->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'log_printer_data' => $log_printer,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
            $data['content']='log_printer/tb_log_printer_list';
            $this->load->view('welcome_message', $data);
        }

    public function read($id) 
    {
        $row = $this->M_log_printer->get_by_id($id);
        if ($row) {
            $data = array(
    		'id_log_printer' => $row->id_log_printer,
    		'id_printer' => $row->id_printer,
    		'masalah' => $row->masalah,
    		'ket' => $row->ket,
    		'tgl' => $row->tgl,
    	    );
                $data['content']='log_printer/tb_log_printer_read';
                $this->load->view('welcome_message', $data);
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(site_url('log_printer'));
            }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
                'action' => site_url('log_printer/create_action'),
    	    'id_log_printer' => set_value('id_log_printer'),
    	    'id_printer' => set_value('id_printer'),
    	    'masalah' => set_value('masalah'),
    	    'ket' => set_value('ket'),
    	    'tgl' => set_value('tgl'),
    	);
            $data['content']='log_printer/tb_log_printer_form';
            $this->load->view('welcome_message', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
    		'id_printer' => $this->input->post('id_printer',TRUE),
    		'masalah' => $this->input->post('masalah',TRUE),
    		'ket' => $this->input->post('ket',TRUE),
    		'tgl' => $this->input->post('tgl',TRUE),
    	    );

                $this->M_log_printer->insert($data);
                $this->session->set_flashdata('message', 'Create Record Success');
                redirect(site_url('log_printer'));
            }
    }
    
    public function update($id) 
    {
        $row = $this->M_log_printer->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('log_printer/update_action'),
        		'id_log_printer' => set_value('id_log_printer', $row->id_log_printer),
        		'id_printer' => set_value('id_printer', $row->id_printer),
        		'masalah' => set_value('masalah', $row->masalah),
        		'ket' => set_value('ket', $row->ket),
        		'tgl' => set_value('tgl', $row->tgl),
        	    );
                    $data['content']='log_printer/tb_log_printer_form';
                    $this->load->view('welcome_message', $data);
                } else {
                    $this->session->set_flashdata('message', 'Record Not Found');
                    redirect(site_url('log_printer'));
                }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_log_printer', TRUE));
        } else {
            $data = array(
    		'id_printer' => $this->input->post('id_printer',TRUE),
    		'masalah' => $this->input->post('masalah',TRUE),
    		'ket' => $this->input->post('ket',TRUE),
    		'tgl' => $this->input->post('tgl',TRUE),
    	    );

                $this->M_log_printer->update($this->input->post('id_log_printer', TRUE), $data);
                $this->session->set_flashdata('message', 'Update Record Success');
                redirect(site_url('log_printer'));
            }
    }
    
    public function delete($id) 
    {
        $row = $this->M_log_printer->get_by_id($id);

        if ($row) {
            $this->M_log_printer->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('log_printer'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('log_printer'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_printer', 'id printer', 'trim|required');
	$this->form_validation->set_rules('masalah', 'masalah', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');
	$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');

	$this->form_validation->set_rules('id_log_printer', 'id_log_printer', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tb_log_printer.xls";
        $judul = "tb_log_printer";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Id Printer");
	xlsWriteLabel($tablehead, $kolomhead++, "Masalah");
	xlsWriteLabel($tablehead, $kolomhead++, "Ket");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl");

	foreach ($this->M_log_printer->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_printer);
	    xlsWriteLabel($tablebody, $kolombody++, $data->masalah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ket);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Log_printer.php */
/* Location: ./application/controllers/Log_printer.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-01 08:47:42 */
/* http://harviacode.com */