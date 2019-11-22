<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Level extends CI_Model
{
    public $_tb  = "tbu_level";

    function add()
    {
        $dtarray = array(
            'kode_level' => $this->input->post('kode_level'),
            'nama_level' => $this->input->post('nama_level'),
            'id_user_created' => $this->input->post('id_user_created'),
            'date_created_level' => $this->input->post('date_created_level'),
            'date_update_level' => $this->input->post('date_update_level'),
            'date_delete_level' => $this->input->post('date_delete_level'),

            'user_insert' => $this->input->post('user_insert'),
            'user_view' => $this->input->post('user_view'),
            'user_edit' => $this->input->post('user_edit'),
            'user_delete' => $this->input->post('user_delete'),

            'request_insert' => $this->input->post('request_insert'),
            'request_view' => $this->input->post('request_view'),
            'request_edit' => $this->input->post('request_edit'),
            'request_delete' => $this->input->post('request_delete'),

            'level_insert' => $this->input->post('level_insert'),
            'level_view' => $this->input->post('level_view'),
            'level_edit' => $this->input->post('level_edit'),
            'level_delete' => $this->input->post('level_delete'),

            'diskusi_insert' => $this->input->post('diskusi_insert'),
            'diskusi_view' => $this->input->post('diskusi_view'),
            'diskusi_edit' => $this->input->post('diskusi_edit'),
            'diskusi_delete' => $this->input->post('diskusi_delete'),

            'diskusi_child_insert' => $this->input->post('diskusi_child_insert'),
            'diskusi_child_view' => $this->input->post('diskusi_child_view'),
            'diskusi_child_edit' => $this->input->post('diskusi_child_edit'),
            'diskusi_child_delete' => $this->input->post('diskusi_child_delete'),

            'request_child_insert' => $this->input->post('request_child_insert'),
            'request_child_view' => $this->input->post('request_child_view'),
            'request_child_edit' => $this->input->post('request_child_edit'),
            'request_child_delete' => $this->input->post('request_child_delete'),

            'produk_insert' => $this->input->post('produk_insert'),
            'produk_view' => $this->input->post('produk_view'),
            'produk_edit' => $this->input->post('produk_edit'),
            'produk_delete' => $this->input->post('produk_delete'),

            'event_insert' => $this->input->post('event_insert'),
            'event_view' => $this->input->post('event_view'),
            'event_edit' => $this->input->post('event_edit'),
            'event_delete' => $this->input->post('event_delete'),
        );
        return $this->db->insert('tb_karyawan', $dtarray);
    }
}
