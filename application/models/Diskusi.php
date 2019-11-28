<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diskusi extends CI_Model
{
    public $_tb  = "tb_diskusi";
    public $_tbc = "tb_diskusi_child";

    function view()
    {
        $this->db->join('tb_request_child', 'tb_diskusi.id_request_child = tb_request_child.id_request_child');
        $this->db->join('tb_produk', 'tb_request_child.kode_produk = tb_produk.kode_produk');
        return $this->db->get($this->_tb);
    }

    function showchild()
    {
        $this->db->order_by('id_diskusi_child', 'DESC');
        return $this->db->get_where($this->_tbc);
    }


    function add()
    {
        $dtarray = array(
            'status_diskusi' => 'W',
            'id_request_child' => $this->input->post('idreqchild'),
            'id_user_create_diskusi' => $_SESSION['userId'],
            'date_created_diskusi' => date('Y-m-d H:i:s'),
        );
        return $this->db->insert('tb_diskusi', $dtarray);
    }

    function addchild($id)
    {
        $dtarray = array(

            'id_diskusi' => $id,
            'subject' => $this->input->post('subject'),
            'komentar' => $this->input->post('komentar'),
            'id_user_create_diskusi_child' => $_SESSION['userId'],
            'date_created_diskusi_child' => date('Y-m-d H:i:s'),
        );
        return $this->db->insert('tb_diskusi_child', $dtarray);
    }

    function find($id)
    {
        $this->db->join('tb_request_child', 'tb_diskusi.id_request_child = tb_request_child.id_request_child');
        return  $this->db->get_where($this->_tb, array('id_diskusi' => $id)); // memanggil spesifik data user berdasarkan id tertentu
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

    function validreqchild($id)
    {
        return $this->db->get_where('tb_diskusi', array('id_request_child' => $id))->num_rows();
    }

    function changeFotoDiskusi($id, $filename)
    {
        $dtarray = array(
            'photo_diskusi_child'          => $filename
        );
        $this->db->where('id_diskusi_child', $id);
        return $this->db->update($this->_tbc, $dtarray);
    }

    function done($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $dtarray = array(
            'status_diskusi' => 'Y',
        );
        $this->db->where('id_diskusi', $id);
        return $this->db->update($this->_tb, $dtarray);
    }
}
