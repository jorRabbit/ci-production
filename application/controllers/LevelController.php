<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LevelController extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->loggedIn();
        $this->load->model('Level');
        $this->load->model('Flashdata', 'flash');
    }

    public function rules($q)
    {
        if ($q == '1') {
            return [
                [
                    'field' => 'kodelevel',
                    'label' => 'kodelevel',
                    'rules' => 'required|max_length[3]|is_unique[tbu_level.kode_level]'
                ],

                [
                    'field' => 'namalevel',
                    'label' => 'namalevel',
                    'rules' => 'required|max_length[36]|is_unique[tbu_level.nama_level]'
                ],

            ];
        } elseif ($q == '2') {
            return [
                [
                    'field' => 'namalevel',
                    'label' => 'namalevel',
                    'rules' => 'required|max_length[36]|is_unique[tbu_level.nama_level]'
                ],

                [
                    'field' => 'userinsert',
                    'label' => 'userinsert',
                    'rules' => 'required'
                ],
            ];
        }
    }

    public function index()
    {
        $dt = array(
            'grup'      => 'Hone', 'menu' => 'Home', 'sub' => 'View',
            'data'      => $this->Level->view()->result(),
            'content'    => 'level/view',
        );

        $this->theme($dt);
    }

    public function add()
    {
        $this->form_validation->set_rules($this->rules('1'));

        if ($this->form_validation->run() === false) {
            $dt = array(
                'grup'      => 'Level', 'menu' => 'Level', 'sub' => 'Add',
                'content'    => 'level/add',
            );
            $this->theme($dt);
        } else {
            $add = $this->Level->add();
            if ($add) {
                $this->session->set_flashdata('notif', $this->flash->successFlash());
                redirect('level-add');
            } else {
                $this->session->set_flashdata('notif', $this->flash->failedFlash());
                redirect('level-add');
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules('2'));

        if ($this->form_validation->run() === false) {
            $dt = array(
                'grup'      => 'Level', 'menu' => 'Level', 'sub' => 'Delete',
                'data'        => $this->Level->find($id)->first_row(),
                'content'    => 'level/edit',
            );
            $this->theme($dt);
        } else {
            // echo 'eksekusi';
            $edit = $this->Level->update($id);
            if ($edit) {
                $this->session->set_flashdata('notif', $this->flash->successFlash());
                redirect('level-edit/' . $id);
            } else {
                $this->session->set_flashdata('notif', $this->flash->failedFlash());
                redirect('level-edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->Level->delete($id);
        if ($delete) {
            $this->session->set_flashdata('notif', $this->flash->successFlash());
            redirect('level');
        } else {
            $this->session->set_flashdata('notif', $this->flash->failedFlash());
            redirect('level');
        }
    }
}
