<?php if (!defined("BASEPATH")) exit("No direct script access allowed");


function loginAs($id)
{
    $CI = get_instance();
    $CI->db->join('tbu_level', 'tbu_user.kode_level=tbu_level.kode_level');
    return $CI->db->get_where('tbu_user', array('id_user' => $id))->first_row();
}

function showreqchild($id)
{
    $CI = get_instance();
    $CI->db->join('tb_request_child', 'tb_request.id_request=tb_request.id_request');
    return $CI->db->get_where('tb_request', array('tb_request.id_request' => $id))->result();
}

function validdiskusichild($id)
{
    $CI = get_instance();
    return $CI->db->get_where('tb_diskusi', array('id_request_child' => $id))->num_rows();
}


function notifikasi()
{
    $CI = get_instance();
    return $CI->db->get_where('tb_diskusi', array('status_diskusi' => 'W'))->num_rows();
}

function shownotifikasi()
{
    $CI = get_instance();
    $CI->db->join('tb_request_child', 'tb_diskusi.id_request_child = tb_request_child.id_request_child');
    $CI->db->join('tb_produk', 'tb_request_child.kode_produk = tb_produk.kode_produk');
    return $CI->db->get_where('tb_diskusi', array('status_diskusi' => 'W'))->result();
}

function checkdiskusi($id)
{
    $CI = get_instance();
    return $CI->db->get_where('tb_diskusi', array('id_request_child' => $id))->num_rows();
}

function menu($field)
{
    $CI = get_instance();
    $wrarray = array(
        'kode_level' => $_SESSION['level'],
        $field => 'Y'
    );

    return $CI->db->get_where('tbu_level', $wrarray)->num_rows();
}
