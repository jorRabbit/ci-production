<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Production extends CI_Model
{
    public $_tb  = "tbu_produk";

    function show()
    {
        $dtarray = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'kode_level' => $this->input->post('kd_divisi'),
            'status_aktif' => $this->input->post('status_aktif'),
            'email' => $this->input->post('email'),
            'date_created_user' => $this->input->post('date_created_user'),
            'date_update_user' => $this->input->post('date_update_user'),
            'date_delete_user' => $this->input->post('date_delete_user'),
            'id_user_created' => $this->input->post('id_user_created'),
        );
        return $this->db->insert('tb_karyawan', $dtarray);
    }
}
