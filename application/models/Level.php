<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Level extends CI_Model
{
    public $_tb  = "tbu_level";
    function view()

    {
        return $this->db->get($this->_tb);
    }

    function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $dtarray = array(
            'kode_level'            => $this->input->post('kodelevel'),
            'nama_level'            => $this->input->post('namalevel'),
            'id_user_created'       => $_SESSION['userId'],
            'date_created_level'    => date('Y-m-d H:i:s'),

            'user_insert'           => $this->input->post('userinsert'),
            'user_view'             => $this->input->post('userview'),
            'user_edit'             => $this->input->post('useredit'),
            'user_delete'           => $this->input->post('userdelete'),

            'request_insert'        => $this->input->post('requestinsert'),
            'request_view'          => $this->input->post('requestview'),
            'request_edit'          => $this->input->post('requestedit'),
            'request_delete'        => $this->input->post('requestdelete'),

            'level_insert'          => $this->input->post('levelinsert'),
            'level_view'            => $this->input->post('levelview'),
            'level_edit'            => $this->input->post('leveledit'),
            'level_delete'          => $this->input->post('leveldelete'),

            'diskusi_insert'        => $this->input->post('diskusiinsert'),
            'diskusi_view'          => $this->input->post('diskusiview'),
            'diskusi_edit'          => $this->input->post('diskusiedit'),
            'diskusi_delete'        => $this->input->post('diskusidelete'),

            'diskusi_child_insert'  => $this->input->post('diskusichildinsert'),
            'diskusi_child_view'    => $this->input->post('diskusichildview'),
            'diskusi_child_edit'    => $this->input->post('diskusichildedit'),
            'diskusi_child_delete'  => $this->input->post('diskusichilddelete'),

            'request_child_insert'  => $this->input->post('requestchildinsert'),
            'request_child_view'    => $this->input->post('requestchildview'),
            'request_child_edit'    => $this->input->post('requestchildedit'),
            'request_child_delete'  => $this->input->post('requestchilddelete'),

            'produk_insert'         => $this->input->post('produkinsert'),
            'produk_view'           => $this->input->post('produkview'),
            'produk_edit'           => $this->input->post('produkedit'),
            'produk_delete'         => $this->input->post('produkdelete'),

            'event_insert'          => $this->input->post('eventinsert'),
            'event_view'            => $this->input->post('eventview'),
            'event_edit'            => $this->input->post('eventedit'),
            'event_delete'          => $this->input->post('eventdelete'),
        );
        return $this->db->insert('tbu_level', $dtarray);
    }

    function find($id)
    {
        return  $this->db->get_where($this->_tb, array('id_level' => $id)); // memanggil spesifik data user berdasarkan id tertentu
    }

    function update($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $dtarray = array(
            'nama_level'            => $this->input->post('namalevel'),
            'kode_level'            => $this->input->post('kodelevel'),

            'date_update_level'     => $this->input->post('dateupdatelevel'),

            'user_insert'           => $this->input->post('userinsert'),
            'user_view'             => $this->input->post('userview'),
            'user_edit'             => $this->input->post('useredit'),
            'user_delete'           => $this->input->post('userdelete'),

            'request_insert'        => $this->input->post('requestinsert'),
            'request_view'          => $this->input->post('requestview'),
            'request_edit'          => $this->input->post('requestedit'),
            'request_delete'        => $this->input->post('requestdelete'),

            'level_insert'          => $this->input->post('levelinsert'),
            'level_view'            => $this->input->post('levelview'),
            'level_edit'            => $this->input->post('leveledit'),
            'level_delete'          => $this->input->post('leveldelete'),

            'diskusi_insert'        => $this->input->post('diskusiinsert'),
            'diskusi_view'          => $this->input->post('diskusiview'),
            'diskusi_edit'          => $this->input->post('diskusiedit'),
            'diskusi_delete'        => $this->input->post('diskusidelete'),

            'diskusi_child_insert'  => $this->input->post('diskusichildinsert'),
            'diskusi_child_view'    => $this->input->post('diskusichildview'),
            'diskusi_child_edit'    => $this->input->post('diskusichildedit'),
            'diskusi_child_delete'  => $this->input->post('diskusichilddelete'),

            'request_child_insert'  => $this->input->post('requestchildinsert'),
            'request_child_view'    => $this->input->post('requestchildview'),
            'request_child_edit'    => $this->input->post('requestchildedit'),
            'request_child_delete'  => $this->input->post('requestchilddelete'),

            'produk_insert'         => $this->input->post('produkinsert'),
            'produk_view'           => $this->input->post('produkview'),
            'produk_edit'           => $this->input->post('produkedit'),
            'produk_delete'         => $this->input->post('produkdelete'),

            'event_insert'          => $this->input->post('eventinsert'),
            'event_view'            => $this->input->post('eventview'),
            'event_edit'            => $this->input->post('eventedit'),
            'event_delete'          => $this->input->post('eventdelete'),
        );
        $this->db->where('id_level', $id);
        return $this->db->update($this->_tb, $dtarray);
    }

    function delete($id)
    {
        $this->db->where('id_level', $id);
        return $this->db->delete($this->_tb);
    }
}
