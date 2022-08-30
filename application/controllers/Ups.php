<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ups extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_ups');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'ups/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'ups/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'ups/index.html';
            $config['first_url'] = base_url() . 'ups/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_ups->total_rows($q);
        $ups = $this->M_ups->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'ups_data' => $ups,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content'] ='ups/tb_ups_list';
        $this->load->view('welcome_message', $data);
    }

    public function read($id) 
    {
        $row = $this->M_ups->get_by_id($id);
        if ($row) {
            $data = array(
              'id_ups' => $row->id_ups,
              'user' => $row->user,
              'merek' => $row->merek,
              'model' => $row->model,
              'input' => $row->input,
              'output' => $row->output,
              'kondisi' => $row->kondisi,
              'ket' => $row->ket,
          );
            $data['content']='ups/tb_ups_read';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ups'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('ups/create_action'),
            'id_ups' => set_value('id_ups'),
            'user' => set_value('user'),
            'merek' => set_value('merek'),
            'model' => set_value('model'),
            'input' => set_value('input'),
            'output' => set_value('output'),
            'kondisi' => set_value('kondisi'),
            'ket' => set_value('ket'),
        );
        $data['content']='ups/tb_ups_form';
        $this->load->view('welcome_message', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
              'user' => $this->input->post('user',TRUE),
              'merek' => $this->input->post('merek',TRUE),
              'model' => $this->input->post('model',TRUE),
              'input' => $this->input->post('input',TRUE),
              'output' => $this->input->post('output',TRUE),
              'kondisi' => $this->input->post('kondisi',TRUE),
              'ket' => $this->input->post('ket',TRUE),
          );

            $this->M_ups->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ups'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_ups->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ups/update_action'),
                'id_ups' => set_value('id_ups', $row->id_ups),
                'user' => set_value('user', $row->user),
                'merek' => set_value('merek', $row->merek),
                'model' => set_value('model', $row->model),
                'input' => set_value('input', $row->input),
                'output' => set_value('output', $row->output),
                'kondisi' => set_value('kondisi', $row->kondisi),
                'ket' => set_value('ket', $row->ket),
            );
            $data['content'] ='ups/tb_ups_form';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ups'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_ups', TRUE));
        } else {
            $data = array(
              'user' => $this->input->post('user',TRUE),
              'merek' => $this->input->post('merek',TRUE),
              'model' => $this->input->post('model',TRUE),
              'input' => $this->input->post('input',TRUE),
              'output' => $this->input->post('output',TRUE),
              'kondisi' => $this->input->post('kondisi',TRUE),
              'ket' => $this->input->post('ket',TRUE),
          );

            $this->M_ups->update($this->input->post('id_ups', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ups'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_ups->get_by_id($id);

        if ($row) {
            $this->M_ups->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ups'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ups'));
        }
    }

    public function _rules() 
    {
       $this->form_validation->set_rules('user', 'user', 'trim|required');
       $this->form_validation->set_rules('merek', 'merek', 'trim|required');
       $this->form_validation->set_rules('model', 'model', 'trim|required');
       $this->form_validation->set_rules('input', 'input', 'trim|required');
       $this->form_validation->set_rules('output', 'output', 'trim|required');
       $this->form_validation->set_rules('kondisi', 'kondisi', 'trim|required');
       $this->form_validation->set_rules('ket', 'ket', 'trim|required');

       $this->form_validation->set_rules('id_ups', 'id_ups', 'trim');
       $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
   }

   public function excel()
   {
    $this->load->helper('exportexcel');
    $namaFile = "tb_ups.xls";
    $judul = "tb_ups";
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
    xlsWriteLabel($tablehead, $kolomhead++, "User");
    xlsWriteLabel($tablehead, $kolomhead++, "merek");
    xlsWriteLabel($tablehead, $kolomhead++, "Model");
    xlsWriteLabel($tablehead, $kolomhead++, "Input");
    xlsWriteLabel($tablehead, $kolomhead++, "Output");
    xlsWriteLabel($tablehead, $kolomhead++, "Kondisi");
    xlsWriteLabel($tablehead, $kolomhead++, "Ket");

    foreach ($this->M_ups->get_all() as $data) {
        $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
        xlsWriteNumber($tablebody, $kolombody++, $nourut);
        xlsWriteLabel($tablebody, $kolombody++, $data->user);
        xlsWriteLabel($tablebody, $kolombody++, $data->merek);
        xlsWriteLabel($tablebody, $kolombody++, $data->model);
        xlsWriteLabel($tablebody, $kolombody++, $data->input);
        xlsWriteLabel($tablebody, $kolombody++, $data->output);
        xlsWriteLabel($tablebody, $kolombody++, $data->kondisi);
        xlsWriteLabel($tablebody, $kolombody++, $data->ket);

        $tablebody++;
        $nourut++;
    }

    xlsEOF();
    exit();
}

}

/* End of file Ups.php */
/* Location: ./application/controllers/Ups.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-09-08 04:00:02 */
/* http://harviacode.com */