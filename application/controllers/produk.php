<?php 

class Produk extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('produk/index');
        $this->load->view('template/footer');
    }
}
