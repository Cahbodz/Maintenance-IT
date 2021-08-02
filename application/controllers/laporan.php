<?php 
class Laporan extends CI_Controller {
    public function __construct()
        {   
            parent::__construct();
            $this->load->model('M_printer');
            $this->load->library('Pdf');
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

    public function cetak_produk()
        {
            $data['produk'] = $this->M_printer->get_all();
            $this->load->view('laporan_pdf', $data);
    }   
}