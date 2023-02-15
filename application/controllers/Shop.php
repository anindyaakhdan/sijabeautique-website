<?php 

class Shop extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('shop/index');
        $this->load->view('template/footer');
    }
}
