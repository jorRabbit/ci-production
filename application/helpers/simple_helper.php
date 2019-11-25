<?php if (!defined("BASEPATH")) exit("No direct script access allowed");
function loginAs($id)
{
    $CI = get_instance();
    $CI->db->join('tbu_level', 'tbu_user.kode_level=tbu_level.kode_level');
    return $CI->db->get_where('tbu_user', array('id_user' => $id))->first_row();
}
