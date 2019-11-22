<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Model
{
    private $_tb = 'tbu_user';

    public function checkPassword($username, $password)
    {
        $hash = $this->getUser('username', $username)['password'];
        if (password_verify($password, $hash)) {
            return true;
        }

        return false;
    }

    public function getUser($key, $value)
    {
        $wrarray = array(
            $key            => $value
        );

        $q = $this->db->get_where($this->_tb, $wrarray);
        if (!empty($q->row_array())) {
            return $q->row_array();
        }

        return false;
    }

    public function getTbUser($wrarray)
    {
        return $this->db->get_where($this->_tb, $wrarray);
    }
}
