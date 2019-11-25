<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->loggedIn();
        $this->load->model('User');
        $this->load->model('Flashdata', 'flash');
    }

    public function rules($q)
    {
        if ($q == '1') {
            return [
                [
                    'field' => 'namalengkap',
                    'label' => 'namalengkap',
                    'rules' => 'required|max_length[60]'
                ],

                [
                    'field' => 'username',
                    'label' => 'username',
                    'rules' => 'required|max_length[12]|is_unique[tbu_user.username]'
                ],

                [
                    'field' => 'email',
                    'label' => 'email',
                    'rules' => 'required|max_length[60]|is_unique[tbu_user.email]'
                ],

                [
                    'field' => 'password',
                    'label' => 'password',
                    'rules' => 'required|max_length[256]'
                ],

                [
                    'field' => 'status',
                    'label' => 'status',
                    'rules' => 'required|max_length[1]'
                ],

                [
                    'field' => 'level',
                    'label' => 'level',
                    'rules' => 'required|max_length[3]'
                ],

            ];
        } elseif ($q == '2') {
            return [
                [
                    'field' => 'namalengkap',
                    'label' => 'namalengkap',
                    'rules' => 'required|max_length[60]'
                ],

                [
                    'field' => 'status',
                    'label' => 'status',
                    'rules' => 'required|max_length[1]'
                ],

                [
                    'field' => 'level',
                    'label' => 'level',
                    'rules' => 'required|max_length[3]'
                ],

            ];
        }
    }

    public function index()
    {
        $dt = array(
            'grup'      => 'Hone', 'menu' => 'Home', 'sub' => 'View',
            'data'      => $this->User->view()->result(),
            'content'    => 'user/view',
        );

        $this->theme($dt);
    }

    public function add()
    {
        $this->form_validation->set_rules($this->rules('1'));

        if ($this->form_validation->run() === false) {
            $dt = array(
                'grup'      => 'User', 'menu' => 'User', 'sub' => 'Add',
                'level'     => $this->db->order_by('nama_level', 'ASC')->get('tbu_level')->result(), // mengambil data dari tabel level urutkan dari nama level terkecil(ASC)
                'content'    => 'user/add',
            );
            $this->theme($dt);
        } else {
            $add = $this->User->add();
            if ($add) {
                $this->session->set_flashdata('notif', $this->flash->successFlash());
                redirect('user-add');
            } else {
                $this->session->set_flashdata('notif', $this->flash->failedFlash());
                redirect('user-add');
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules('2'));

        if ($this->form_validation->run() === false) {
            $dt = array(
                'grup'      => 'User', 'menu' => 'User', 'sub' => 'Delete',
                'data'      => $this->User->find($id)->first_row(),
                'level'     => $this->db->order_by('nama_level', 'ASC')->get('tbu_level')->result(), // mengambil data dari tabel level urutkan dari nama level terkecil(ASC)
                'content'   => 'user/edit',
            );
            $this->theme($dt);
        } else {
            // echo 'eksekusi';
            $edit = $this->User->update($id);
            if ($edit) {
                $this->session->set_flashdata('notif', $this->flash->successFlash());
                redirect('user-edit/' . $id);
            } else {
                $this->session->set_flashdata('notif', $this->flash->failedFlash());
                redirect('user-edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->User->delete($id);
        if ($delete) {
            $this->session->set_flashdata('notif', $this->flash->successFlash());
            redirect('user');
        } else {
            $this->session->set_flashdata('notif', $this->flash->failedFlash());
            redirect('user');
        }
    }
}
