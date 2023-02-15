<?php

class Access extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $this->load->view('access/login');
    }

    public function signup()
    {
        $this->load->view('access/signup');
    }

    public function forgot()
    {
        $this->load->view('access/forgot');
    }
    
}
