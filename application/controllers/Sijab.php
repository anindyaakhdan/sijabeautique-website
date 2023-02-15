<?php

class Sijab extends CI_Controller
{
    public function active()
    {
        $this->load->view('template/header');
        $this->load->view('sijab/active');
        $this->load->view('template/footer');
    }

    public function basic()
    {
        $this->load->view('template/header');
        $this->load->view('sijab/basic');
        $this->load->view('template/footer');
    }

    public function daily()
    {
        $this->load->view('template/header');
        $this->load->view('sijab/daily');
        $this->load->view('template/footer');
    }

    public function essentials()
    {
        $this->load->view('template/header');
        $this->load->view('sijab/essentials');
        $this->load->view('template/footer');
    }

    public function infreenity()
    {
        $this->load->view('template/header');
        $this->load->view('sijab/infreenity');
        $this->load->view('template/footer');
    }

    public function scarf()
    {
        $this->load->view('template/header');
        $this->load->view('sijab/scarf');
        $this->load->view('template/footer');
    }
}
