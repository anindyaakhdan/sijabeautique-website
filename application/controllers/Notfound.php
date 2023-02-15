<?php

class Notfound extends CI_Controller
{
    public function error404()
    {

        $this->load->view('template/header');
        $this->load->view('notfound/error404');
        $this->load->view('template/footer');
    }
}
