<?php

class Wishlist extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('wishlist/index');
        $this->load->view('template/footer');
    }
}
