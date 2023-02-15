<?php

class Faq extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('faq/index');
        $this->load->view('template/footer');
    }
}
