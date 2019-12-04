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

    public function findtoFalse($tb, $key, $val)
    {

        if (empty($this->db->get_where($tb, array($key => $val))->num_rows())) {
            redirect('home');
            return false;
        }
        return true;
    }

    public function getAkses($field)
    {
        $wrarray = array(
            'kode_level' => $_SESSION['level'],
            $field => 'Y'
        );
        $akses = $this->db->get_where('tbu_level', $wrarray);
        if (empty($akses)) {
            redirect('home');
            return false;
        }

        return true;
    }
}
