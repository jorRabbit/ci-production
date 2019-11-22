<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model
{
    public $_tb  = "tbu_user";

    function view()
    {
        return $this->db->get($this->_tb);
    }

    function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $dtarray = array(
            'nama_lengkap'      => $this->input->post('namalengkap'),
            'username'          => $this->input->post('username'),
            'password'          => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'kode_level'        => $this->input->post('level'),
            'status_aktif'      => $this->input->post('status'),
            'email'             => $this->input->post('email'),
            'date_created_user' => date('Y-m-d H:i:s'),
            'id_user_created'   => $_SESSION['userId'],
        );
        return $this->db->insert('tbu_user', $dtarray);
    }

    function find($id)
    {
        return  $this->db->get_where($this->_tb, array('id_user' => $id)); // memanggil spesifik data user berdasarkan id tertentu
    }

    function update($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $dtarray = array(
            'nama_lengkap'      => $this->input->post('namalengkap'),
            'kode_level'        => $this->input->post('level'),
            'status_aktif'      => $this->input->post('status'),
            'date_update_user'  => date('Y-m-d H:i:s'),
            'id_user_created'   => $_SESSION['userId'],
        );
        $this->db->where('id_user', $id);
        return $this->db->update($this->_tb, $dtarray);
    }

    function delete($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->delete($this->_tb);
    }
}
