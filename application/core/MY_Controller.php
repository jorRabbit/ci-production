<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function loggedIn()
    {
        if (!isset($_SESSION['loggedIn'])) {
            $this->session->sess_destroy();
            redirect('login');
        }
    }
    public function theme($dt)
    {
        $this->load->view('templates/theme', $dt);
    }
}
