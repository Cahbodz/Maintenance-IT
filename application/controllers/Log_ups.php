<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Log_ups extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_log_ups');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'log_ups/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'log_ups/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'log_ups/index.html';
            $config['first_url'] = base_url() . 'log_ups/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_log_ups->total_rows($q);
        $log_ups = $this->M_log_ups->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'log_ups_data' => $log_ups,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['content'] = 'log_ups/tb_log_ups_list';
        $this->load->view('welcome_message', $data);
    }

    public function read($id)
    {
        $row = $this->M_log_ups->get_by_id($id);
        if ($row) {
            $data = array(
                'id_logups' => $row->id_logups,
                'id_ups' => $row->id_ups,
                'service' => $row->service,
                'ket' => $row->ket,
                'tgl' => $row->tgl,
            );
            $data['content'] = 'log_ups/tb_log_ups_read';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('log_ups'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('log_ups/create_action'),
            'id_logups' => set_value('id_logups'),
            'id_ups' => set_value('id_ups'),
            'service' => set_value('service'),
            'ket' => set_value('ket'),
            'tgl' => set_value('tgl'),
        );
        $data['content'] = 'log_ups/tb_log_ups_form';
        $this->load->view('welcome_message', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'id_ups' => $this->input->post('id_ups', TRUE),
                'service' => $this->input->post('service', TRUE),
                'ket' => $this->input->post('ket', TRUE),
                'tgl' => $this->input->post('tgl', TRUE),
            );

            $this->M_log_ups->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('log_ups'));
        }
    }

    public function update($id)
    {
        $row = $this->M_log_ups->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('log_ups/update_action'),
                'id_logups' => set_value('id_logups', $row->id_logups),
                'id_ups' => set_value('id_ups', $row->id_ups),
                'service' => set_value('service', $row->service),
                'ket' => set_value('ket', $row->ket),
                'tgl' => set_value('tgl', $row->tgl),
            );
            $data['content'] = 'log_ups/tb_log_ups_form';
            $this->load->view('welcome_message', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('log_ups'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_logups', TRUE));
        } else {
            $data = array(
                'id_ups' => $this->input->post('id_ups', TRUE),
                'service' => $this->input->post('service', TRUE),
                'ket' => $this->input->post('ket', TRUE),
                'tgl' => $this->input->post('tgl', TRUE),
            );

            $this->M_log_ups->update($this->input->post('id_logups', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('log_ups'));
        }
    }

    public function delete($id)
    {
        $row = $this->M_log_ups->get_by_id($id);

        if ($row) {
            $this->M_log_ups->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('log_ups'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('log_ups'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_ups', 'id ups', 'trim|required');
        $this->form_validation->set_rules('service', 'service', 'trim|required');
        $this->form_validation->set_rules('ket', 'ket', 'trim|required');
        $this->form_validation->set_rules('tgl', 'tgl', 'trim|required');

        $this->form_validation->set_rules('id_logups', 'id_logups', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tb_log_ups.xls";
        $judul = "tb_log_ups";
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
        xlsWriteLabel($tablehead, $kolomhead++, "Id Ups");
        xlsWriteLabel($tablehead, $kolomhead++, "Service");
        xlsWriteLabel($tablehead, $kolomhead++, "Ket");
        xlsWriteLabel($tablehead, $kolomhead++, "Tgl");

        foreach ($this->M_log_ups->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->id_ups);
            xlsWriteLabel($tablebody, $kolombody++, $data->service);
            xlsWriteLabel($tablebody, $kolombody++, $data->ket);
            xlsWriteLabel($tablebody, $kolombody++, $data->tgl);

            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }
}

/* End of file Log_ups.php */
/* Location: ./application/controllers/Log_ups.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-07-05 10:11:11 */
/* http://harviacode.com */