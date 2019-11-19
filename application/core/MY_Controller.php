<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function theme($dt)
    {
        $this->load->view('templates/theme', $dt);
    }
}
