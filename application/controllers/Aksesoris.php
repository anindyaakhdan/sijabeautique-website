<?php

class Aksesoris extends CI_Controller
{
    public function masker()
    {
        $this->load->view('template/header');
        $this->load->view('aksesoris/masker');
        $this->load->view('template/footer');
    }

    public function bros()
    {
        $this->load->view('template/header');
        $this->load->view('aksesoris/bros');
        $this->load->view('template/footer');
    }

    public function kaoskaki()
    {
        $this->load->view('template/header');
        $this->load->view('aksesoris/kaoskaki');
        $this->load->view('template/footer');
    }

    public function kalung()
    {
        $this->load->view('template/header');
        $this->load->view('aksesoris/kalung');
        $this->load->view('template/footer');
    }

    public function sepatu()
    {
        $this->load->view('template/header');
        $this->load->view('aksesoris/sepatu');
        $this->load->view('template/footer');
    }

    public function tas()
    {
        $this->load->view('template/header');
        $this->load->view('aksesoris/tas');
        $this->load->view('template/footer');
    }

    public function ikatrambut()
    {
        $this->load->view('template/header');
        $this->load->view('aksesoris/ikatrambut');
        $this->load->view('template/footer');
    }

    public function sajadah()
    {
        $this->load->view('template/header');
        $this->load->view('aksesoris/sajadah');
        $this->load->view('template/footer');
    }
}
