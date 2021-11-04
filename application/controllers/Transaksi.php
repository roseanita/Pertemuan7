<?php
class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Harga");
    }
    public function index()
    {
        $this->load->view('v_input');
    }

    public function proses()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
            'merk' => $this->input->post('merk'),
            'size' => $this->input->post('size'),
            'harga' => $this->M_Harga->getHarga($this->input->post('merk'))
        ];

        $this->load->view('v_hasil', $data);
    }
}
