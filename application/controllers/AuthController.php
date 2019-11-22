<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth', 'auth');
    }

    public function rules($q)
    {
        if ($q == '1') {
            return [
                [
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'required|callback_checkUsername|callback_checkRole'
                ],

                [
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'required|callback_checkPassword'
                ]

            ];
        } else {
            return [
                [
                    'field' => 'email',
                    'label' => 'email',
                    'rules' => 'required|callback_checkEmail'
                ],

            ];
        }
    }


    public function index()
    {
        if (isset($_SESSION['loggedIn'])) {
            redirect('home');
        }

        $this->form_validation->set_rules($this->rules('1'));

        if ($this->form_validation->run() === false) {
            $this->load->view('auth/login');
        } else {

            $auth = $this->auth->getUser('username', $this->input->post('username'));

            $_SESSION['userId']     = $auth['id_user'];
            $_SESSION['loggedIn']   = true;

            redirect('home');
        }
    }
    public function checkUsername($username)
    {
        if (!$this->auth->getUser('username', $username)) {
            $this->form_validation->set_message('checkUsername', 'username is not on database');
            return false;
        }

        return true;
    }

    public function checkEmail($email)
    {
        if (!$this->auth->getUser('email', $email)) {
            $this->form_validation->set_message('checkEmail', 'email is not on database');
            return false;
        }

        return true;
    }


    public function checkRole($username)
    {
        $user = $this->auth->getUser('username', $this->input->post('username'));

        if (($user['status_aktif'] == 'W') or ($user['status_aktif'] == 'N')) {
            $this->form_validation->set_message('checkRole', 'username is not activated');
            return false;
        }

        return true;
    }

    public function checkPassword($password)
    {
        $user = $this->auth->getUser('username', $this->input->post('username'));
        if ($user) {
            if ($this->auth->checkPassword($user['username'], $password)) {
                $this->form_validation->set_message('checkPassword', 'password is incorrect');
                return false;
            }
        }

        return true;
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
