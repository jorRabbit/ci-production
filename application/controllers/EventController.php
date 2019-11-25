<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EventController extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->loggedIn();
        $this->load->model('Event');
        $this->load->model('Flashdata', 'flash');
    }

    public function rules($q)
    {
        if ($q == '1') {
            return [
                [
                    'field' => 'kdevent',
                    'label' => 'kdevent',
                    'rules' => 'required|max_length[20]|is_unique[tb_event.kode_event]'
                ],

                [
                    'field' => 'namaevent',
                    'label' => 'namaevent',
                    'rules' => 'required|max_length[60]|is_unique[tb_event.nama_event]'
                ],

                [
                    'field' => 'dstartevent',
                    'label' => 'dstartevent',
                    'rules' => 'required'
                ],

                [
                    'field' => 'dendevent',
                    'label' => 'dendevent',
                    'rules' => 'required'
                ],

                [
                    'field' => 'picevent',
                    'label' => 'dcreated',
                    'rules' => 'required'
                ],

            ];
        } elseif ($q == '2') {
            return [
                [
                    'field' => 'namaevent',
                    'label' => 'namaevent',
                    'rules' => 'required|max_length[60]|is_unique[tbu_level.nama_event]'
                ],

                [
                    'field' => 'dstartevent',
                    'label' => 'dstartevent',
                    'rules' => 'required'
                ],

                [
                    'field' => 'dendevent',
                    'label' => 'dendevent',
                    'rules' => 'required'
                ],

            ];
        }
    }

    public function index()
    {
        $dt = array(
            'grup'      => 'Hone', 'menu' => 'Home', 'sub' => 'View',
            'data'      => $this->Event->view()->result(),
            'content'    => 'event/view',
        );

        $this->theme($dt);
    }

    public function add()
    {
        $this->form_validation->set_rules($this->rules('1'));

        if ($this->form_validation->run() === false) {
            $dt = array(
                'grup'      => 'Event', 'menu' => 'Event', 'sub' => 'Add',
                'content'   => 'event/add',
            );
            $this->theme($dt);
        } else {
            $add = $this->Event->add();
            if ($add) {
                $this->session->set_flashdata('notif', $this->flash->successFlash());
                redirect('event-add');
            } else {
                $this->session->set_flashdata('notif', $this->flash->failedFlash());
                redirect('event-add');
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules('2'));

        if ($this->form_validation->run() === false) {
            $dt = array(
                'grup'      => 'Event', 'menu' => 'Event', 'sub' => 'Delete',
                'data'        => $this->Event->find($id)->first_row(),
                'content'    => 'event/edit',
            );
            $this->theme($dt);
        } else {
            // echo 'eksekusi';
            $edit = $this->Event->update($id);
            if ($edit) {
                $this->session->set_flashdata('notif', $this->flash->successFlash());
                redirect('event-edit/' . $id);
            } else {
                $this->session->set_flashdata('notif', $this->flash->failedFlash());
                redirect('event-edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->Event->delete($id);
        if ($delete) {
            $this->session->set_flashdata('notif', $this->flash->successFlash());
            redirect('event');
        } else {
            $this->session->set_flashdata('notif', $this->flash->failedFlash());
            redirect('event');
        }
    }
}
