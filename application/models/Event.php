<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Model
{
    public $_tb  = "tb_event";
    function view()

    {
        return $this->db->get($this->_tb);
    }

    function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $dtarray = array(
            'kode_event'            => $this->input->post('kdevent'),
            'nama_event'            => $this->input->post('namaevent'),
            'date_start_event'      => date('Y-m-d', strtotime($this->input->post('dstartevent'))),
            'date_end_event'        => date('Y-m-d', strtotime($this->input->post('dendevent'))),
            'pic_event'             => $this->input->post('picevent'),
            'date_created'          => date('Y-m-d H:i:s'),
            'id_user_create_event'  => $_SESSION['userId'],
        );
        return $this->db->insert('tb_event', $dtarray);
    }

    function find($id)
    {
        return  $this->db->get_where($this->_tb, array('id_event' => $id)); // memanggil spesifik data user berdasarkan id tertentu
    }

    function update($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $dtarray = array(
            'kode_event'            => $this->input->post('kdevent'),
            'nama_event'            => $this->input->post('namaevent'),
            'date_start_event'      => date('Y-m-d', strtotime($this->input->post('dstartevent'))),
            'date_end_event'        => date('Y-m-d', strtotime($this->input->post('dendevent'))),
            'pic_event'             => $this->input->post('picevent'),
            'date_update'           => $this->input->post('dupdate'),
            'id_user_create_event'  => $_SESSION['userId'],
        );
        $this->db->where('id_event', $id);
        return $this->db->update($this->_tb, $dtarray);
    }

    function delete($id)
    {
        $this->db->where('id_event', $id);
        return $this->db->delete($this->_tb);
    }
}
