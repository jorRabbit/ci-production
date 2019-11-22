<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diskusi extends CI_Model
{
    public $_tb  = "tbu_diskusi";

    function add()
    {
        $dtarray = array(
            'kode_level' => $this->input->post('kode_level'),
            'nama_level' => $this->input->post('nama_level'),
            'id_user_created' => $this->input->post('id_user_created'),
            'date_created_level' => $this->input->post('date_created_level'),
            'date_update_level' => $this->input->post('date_update_level'),
            'date_delete_level' => $this->input->post('date_delete_level'),
        );
        return $this->db->insert('tb_karyawan', $dtarray);
    }
}
