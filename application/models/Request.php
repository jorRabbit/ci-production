<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request extends CI_Model
{
    public $_tb  = "tb_request";

    function view()
    {
        $this->db->join('tb_event', 'tb_request.id_event = tb_event.id_event');
        return $this->db->get($this->_tb);
    }


    function add()
    {
        $dtarray = array(
            'date_dateline' => date('Y-m-d', strtotime($this->input->post('ddateline'))),
            'date_created_request' => date('Y-m-d H:i:s'),
            'id_user_created' => $_SESSION['userId'],
            'id_event' => $this->input->post('idevent'),
            'keterangan' => $this->input->post('keterangan'),
        );
        return $this->db->insert('tb_request', $dtarray);
    }

    function addchild($id)
    {
        $param = $this->input->post('kdproduk');
        $paramcount = count($param);

        for ($x = 0; $x < $paramcount; $x++) :
            $dt[] = [

                'id_request' => $id,
                'kode_produk' => $_POST['kdproduk'][$x],
                'id_user_request_child' => $_SESSION['userId'],
                'date_created_request_child' => date('Y-m-d H:i:s'),
            ];

        endfor;
        return $this->db->insert_batch('tb_request_child', $dt);
    }

    function find($id)
    {
        return  $this->db->get_where($this->_tb, array('id_request' => $id)); // memanggil spesifik data user berdasarkan id tertentu
    }

    function update($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $dtarray = array(
            'date_dateline' => $this->input->post('ddateline'),
            'date_update_request' => date('Y-m-d H:i:s'),
            'id_event' => $this->input->post('idevent'),
        );
        $this->db->where('id_request', $id);
        return $this->db->update($this->_tb, $dtarray);
    }

    function delete($id)
    {
        $this->db->where('id_request', $id);
        return $this->db->delete($this->_tb);
    }
}
