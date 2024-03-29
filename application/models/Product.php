<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Model
{
    public $_tb  = "tb_produk";

    function view()
    {
        return $this->db->get($this->_tb);
    }


    function add()
    {
        $dtarray = array(
            'kode_produk' => $this->input->post('kdproduk'),
            'nama_produk' => $this->input->post('namaproduk'),
            'id_user_create_produk' => $_SESSION['userId'],
            'date_created_produk' => date('Y-m-d H:i:s'),
        );
        return $this->db->insert('tb_produk', $dtarray);
    }

    function find($id)
    {
        return  $this->db->get_where($this->_tb, array('id_produk' => $id)); // memanggil spesifik data user berdasarkan id tertentu
    }

    function update($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $dtarray = array(
            'kode_produk' => $this->input->post('kdproduk'),
            'nama_produk' => $this->input->post('kdproduk'),
            'id_user_create_produk' => $_SESSION['userId'],
            'date_update_produk' => date('Y-m-d H:i:s'),
        );
        $this->db->where('id_produk', $id);
        return $this->db->update($this->_tb, $dtarray);
    }

    function delete($id)
    {
        $this->db->where('id_produk', $id);
        return $this->db->delete($this->_tb);
    }
}
