<?php

class Hijab extends CI_Controller
{
    public function semuahijab()
    {

        $this->load->view('template/header');
        $this->load->view('hijab/semuahijab');
        $this->load->view('template/footer');
    }

    public function pashmina()
    {

        $this->load->view('template/header');
        $this->load->view('hijab/pashmina');
        $this->load->view('template/footer');
    }

    public function segiempat()
    {

        $this->load->view('template/header');
        $this->load->view('hijab/segiempat');
        $this->load->view('template/footer');
    }

    public function hijabinstan()
    {

        $this->load->view('template/header');
        $this->load->view('hijab/hijabinstan');
        $this->load->view('template/footer');
    }

    public function ciput()
    {

        $this->load->view('template/header');
        $this->load->view('hijab/ciput');
        $this->load->view('template/footer');
    }
}
