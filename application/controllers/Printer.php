<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Printer extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_printer');
        $this->load->library('form_validation');
        $this->load->library('Pdf');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'printer/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'printer/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'printer/index.html';
            $config['first_url'] = base_url() . 'printer/index.html';
        }

        $config['per_page'] = 1000;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_printer->total_rows($q);
        $printer = $this->M_printer->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'printer_data' => $printer,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content'] ='printer/tb_printer_list';
        $this->load->view('welcome_message', $data);
    }

    public function read($id) 
    {
        $row = $this->M_printer->get_by_id($id);
        if ($row) {
            $data = array(
              'id_printer' => $row->id_printer,
              'marek' => $row->marek,
              'model' => $row->model,
              'ip_server' => $row->ip_server,
              'multifungsi' => $row->multifungsi,
              'pilihan_warna' => $row->pilihan_warna,
          );
            $data['content']='printer/tb_printer_read';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('printer'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('printer/create_action'),
            'id_printer' => set_value('id_printer'),
            'marek' => set_value('marek'),
            'model' => set_value('model'),
            'ip_server' => set_value('ip_server'),
            'multifungsi' => set_value('multifungsi'),
            'pilihan_warna' => set_value('pilihan_warna'),
        );
        $data['content']='printer/tb_printer_form';
        $this->load->view('welcome_message', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
              'marek' => $this->input->post('marek',TRUE),
              'model' => $this->input->post('model',TRUE),
              'ip_server' => $this->input->post('ip_server',TRUE),
              'multifungsi' => $this->input->post('multifungsi',TRUE),
              'pilihan_warna' => $this->input->post('pilihan_warna',TRUE),
          );

            $this->M_printer->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('printer'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_printer->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('printer/update_action'),
                'id_printer' => set_value('id_printer', $row->id_printer),
                'marek' => set_value('marek', $row->marek),
                'model' => set_value('model', $row->model),
                'ip_server' => set_value('ip_server', $row->ip_server),
                'multifungsi' => set_value('multifungsi', $row->multifungsi),
                'pilihan_warna' => set_value('pilihan_warna', $row->pilihan_warna),
            );
            $data['content']='printer/tb_printer_form';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('printer'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_printer', TRUE));
        } else {
            $data = array(
              'marek' => $this->input->post('marek',TRUE),
              'model' => $this->input->post('model',TRUE),
              'ip_server' => $this->input->post('ip_server',TRUE),
              'multifungsi' => $this->input->post('multifungsi',TRUE),
              'pilihan_warna' => $this->input->post('pilihan_warna',TRUE),
          );

            $this->M_printer->update($this->input->post('id_printer', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('printer'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_printer->get_by_id($id);

        if ($row) {
            $this->M_printer->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('printer'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('printer'));
        }
    }

    public function _rules() 
    {
       $this->form_validation->set_rules('marek', 'marek', 'trim|required');
       $this->form_validation->set_rules('model', 'model', 'trim|required');
       $this->form_validation->set_rules('ip_server', 'ip server', 'trim|required');
       $this->form_validation->set_rules('multifungsi', 'multifungsi', 'trim|required');
       $this->form_validation->set_rules('pilihan_warna', 'pilihan warna', 'trim|required');

       $this->form_validation->set_rules('id_printer', 'id_printer', 'trim');
       $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
   }

   public function excel()
   {
    $this->load->helper('exportexcel');
    $namaFile = "tb_printer.xls";
    $judul = "tb_printer";
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
    xlsWriteLabel($tablehead, $kolomhead++, "Marek");
    xlsWriteLabel($tablehead, $kolomhead++, "Model");
    xlsWriteLabel($tablehead, $kolomhead++, "Ip Server");
    xlsWriteLabel($tablehead, $kolomhead++, "Multifungsi");
    xlsWriteLabel($tablehead, $kolomhead++, "Pilihan Warna");

    foreach ($this->M_printer->get_all() as $data) {
        $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
        xlsWriteNumber($tablebody, $kolombody++, $nourut);
        xlsWriteLabel($tablebody, $kolombody++, $data->marek);
        xlsWriteLabel($tablebody, $kolombody++, $data->model);
        xlsWriteLabel($tablebody, $kolombody++, $data->ip_server);
        xlsWriteLabel($tablebody, $kolombody++, $data->multifungsi);
        xlsWriteLabel($tablebody, $kolombody++, $data->pilihan_warna);

        $tablebody++;
        $nourut++;
    }

    xlsEOF();
    exit();
}

     public function pdf($id)
    {
        $row = $this->M_printer->get_by_id($id);
        if ($row) {
            $data = array(
              'id_printer' => $row->id_printer,
              'marek' => $row->marek,
              'model' => $row->model,
              'ip_server' => $row->ip_server,
              'multifungsi' => $row->multifungsi,
              'pilihan_warna' => $row->pilihan_warna,
          );
            
            $this->load->view('printer/laporan_pdf', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('printer'));
        }
        }
}

/* End of file Printer.php */
/* Location: ./application/controllers/Printer.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-01 08:47:00 */
/* http://harviacode.com */