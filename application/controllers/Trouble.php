<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Trouble extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_trouble');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'trouble/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'trouble/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'trouble/index.html';
            $config['first_url'] = base_url() . 'trouble/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_trouble->total_rows($q);
        $trouble = $this->M_trouble->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'trouble_data' => $trouble,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content']='trouble/tb_trouble_list';
        $this->load->view('welcome_message', $data);
    }

    public function read($id) 
    {
        $row = $this->M_trouble->get_by_id($id);
        if ($row) {
            $data = array(
              'id' => $row->id,
              'code_error' => $row->code_error,
              'pesan' => $row->pesan,
              'solusi' => $row->solusi,
              'langkah' => $row->langkah,
              'link' => $row->link,
              'judul' => $row->judul,
              'tgl' => $row->tgl,
          );
            
            $data['content']='trouble/tb_trouble_read';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('trouble'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('trouble/create_action'),
            'id' => set_value('id'),
            'code_error' => set_value('code_error'),
            'pesan' => set_value('pesan'),
            'solusi' => set_value('solusi'),
            'langkah' => set_value('langkah'),
            'link' => set_value('link'),
            'judul' => set_value('judul'),
            'tgl' => set_value('tgl'),
        );
        $data['content']='trouble/tb_trouble_form';
        $this->load->view('welcome_message', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
              'code_error' => $this->input->post('code_error',TRUE),
              'pesan' => $this->input->post('pesan',TRUE),
              'solusi' => $this->input->post('solusi',TRUE),
              'langkah' => $this->input->post('langkah',TRUE),
              'link' => $this->input->post('link',TRUE),
              'judul' => $this->input->post('judul',TRUE),
              'tgl' => $this->input->post('tgl',TRUE),
          );

            $this->M_trouble->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('trouble'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_trouble->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('trouble/update_action'),
                'id' => set_value('id', $row->id),
                'code_error' => set_value('code_error', $row->code_error),
                'pesan' => set_value('pesan', $row->pesan),
                'solusi' => set_value('solusi', $row->solusi),
                'langkah' => set_value('langkah', $row->langkah),
                'link' => set_value('link', $row->link),
                'judul' => set_value('judul', $row->link),
                'tgl' => set_value('tgl', $row->tgl),
            );
            $data['content']='trouble/tb_trouble_form';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('trouble'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
              'code_error' => $this->input->post('code_error',TRUE),
              'pesan' => $this->input->post('pesan',TRUE),
              'solusi' => $this->input->post('solusi',TRUE),
              'langkah' => $this->input->post('langkah',TRUE),
              'link' => $this->input->post('link',TRUE),
              'judul' => $this->input->post('judul',TRUE),
              'tgl' => $this->input->post('tgl',TRUE),
          );

            $this->M_trouble->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('trouble'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_trouble->get_by_id($id);

        if ($row) {
            $this->M_trouble->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('trouble'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('trouble'));
        }
    }

    public function _rules() 
    {
       $this->form_validation->set_rules('code_error', 'code error', 'trim|required');
       $this->form_validation->set_rules('pesan', 'pesan', 'trim|required');
       $this->form_validation->set_rules('solusi', 'solusi', 'trim|required');
       $this->form_validation->set_rules('langkah', 'langkah', 'trim|required');
       $this->form_validation->set_rules('link', 'link', 'trim|required');
       $this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
       $this->form_validation->set_rules('judul', 'judul', 'trim|required');

       $this->form_validation->set_rules('id', 'id', 'trim');
       $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
   }

   public function excel()
   {
    $this->load->helper('exportexcel');
    $namaFile = "tb_trouble.xls";
    $judul = "tb_trouble";
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
    xlsWriteLabel($tablehead, $kolomhead++, "Code Error");
    xlsWriteLabel($tablehead, $kolomhead++, "Pesan");
    xlsWriteLabel($tablehead, $kolomhead++, "Solusi");
    xlsWriteLabel($tablehead, $kolomhead++, "Langkah");
    xlsWriteLabel($tablehead, $kolomhead++, "Link");
    xlsWriteLabel($tablehead, $kolomhead++, "judul");
    xlsWriteLabel($tablehead, $kolomhead++, "Tgl");

    foreach ($this->M_trouble->get_all() as $data) {
        $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
        xlsWriteNumber($tablebody, $kolombody++, $nourut);
        xlsWriteLabel($tablebody, $kolombody++, $data->code_error);
        xlsWriteLabel($tablebody, $kolombody++, $data->pesan);
        xlsWriteLabel($tablebody, $kolombody++, $data->solusi);
        xlsWriteLabel($tablebody, $kolombody++, $data->langkah);
        xlsWriteLabel($tablebody, $kolombody++, $data->link);
        xlsWriteLabel($tablebody, $kolombody++, $data->judul);
        xlsWriteLabel($tablebody, $kolombody++, $data->tgl);

        $tablebody++;
        $nourut++;
    }

    xlsEOF();
    exit();
}

}

/* End of file Trouble.php */
/* Location: ./application/controllers/Trouble.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-30 10:57:42 */
/* http://harviacode.com */