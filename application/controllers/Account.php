<?php

class Account extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('account/index');
        $this->load->view('template/footer');
    }
}
