<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RequestController extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->loggedIn();
        $this->load->model('Request');
        $this->load->model('Diskusi');
        $this->load->model('Flashdata', 'flash');
    }

    public function rules($q)
    {
        if ($q == '1') {
            return [
                [
                    'field' => 'ddateline',
                    'label' => 'ddateline',
                    'rules' => 'required|max_length[10]'
                ],

                [
                    'field' => 'idevent',
                    'label' => 'idevent',
                    'rules' => 'required'
                ],

                [
                    'field' => 'idevent',
                    'label' => 'idevent',
                    'rules' => 'required'
                ],

                [
                    'field' => 'keterangan',
                    'label' => 'keterangan|max_length[250]',
                    'rules' => 'required'
                ],

                [
                    'field' => 'kdproduk[]',
                    'label' => 'kdproduk',
                    'rules' => 'required'
                ],
            ];
        } elseif ($q == '2') {
            return [
                [
                    'field' => 'ddateline',
                    'label' => 'ddateline',
                    'rules' => 'required'
                ],

            ];
        }
    }

    public function index()
    {
        $dt = array(
            'grup'      => 'Home', 'menu' => 'Home', 'sub' => 'View',
            'data'      => $this->Request->view()->result(),
            'content'    => 'request/view',
        );

        $this->theme($dt);
    }

    public function add()
    {
        $this->form_validation->set_rules($this->rules('1'));

        if ($this->form_validation->run() === false) {
            $dt = array(
                'grup'      => 'Request', 'menu' => 'Request', 'sub' => 'Add',
                'kdproduk'   => $this->db->order_by('kode_produk', 'ASC')->get('tb_produk')->result(), // mengambil data dari tabel level urutkan dari nama level terkecil(ASC)
                'namaproduk'   => $this->db->order_by('nama_produk', 'ASC')->get('tb_produk')->result(), // mengambil data dari tabel level urutkan dari nama level terkecil(ASC)
                'idevent'   => $this->db->order_by('id_event', 'ASC')->get('tb_event')->result(), // mengambil data dari tabel level urutkan dari nama level terkecil(ASC)
                'content'   => 'request/add',
            );
            $this->theme($dt);
        } else {
            $add = $this->Request->add();
            $id    = $this->db->insert_id();
            $addchild = $this->Request->addchild($id);
            if ($add && $addchild) {
                $this->session->set_flashdata('notif', $this->flash->successFlash());
                redirect('request-add');
            } else {
                $this->session->set_flashdata('notif', $this->flash->failedFlash());
                redirect('request-add');
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules('2'));

        if ($this->form_validation->run() === false) {
            $dt = array(
                'grup'      => 'Request', 'menu' => 'Request', 'sub' => 'Delete',
                'data'        => $this->Request->find($id)->first_row(),
                'idevent'   => $this->db->order_by('id_event', 'ASC')->get('tb_event')->result(), // mengambil data dari tabel level urutkan dari nama level terkecil(ASC)
                'datachild' => $this->Request->viewchild($id)->result(),
                'diskusi' => $this->Request->viewdiskusichild($id)->result(),
                'content'    => 'request/edit',
            );
            $this->theme($dt);
        } else {
            // echo 'eksekusi';
            $edit = $this->Request->update($id);
            if ($edit) {
                $this->session->set_flashdata('notif', $this->flash->successFlash());
                redirect('request-edit/' . $id);
            } else {
                $this->session->set_flashdata('notif', $this->flash->failedFlash());
                redirect('request-edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->Request->delete($id);
        if ($delete) {
            $this->session->set_flashdata('notif', $this->flash->successFlash());
            redirect('request');
        } else {
            $this->session->set_flashdata('notif', $this->flash->failedFlash());
            redirect('request');
        }
    }

    public function deletechild($id)
    {
        $delete = $this->Request->deletechild($id);
        if ($delete) {
            $this->session->set_flashdata('notif', $this->flash->successFlash());
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->session->set_flashdata('notif', $this->flash->failedFlash());
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function approved($id)
    {
        $approved = $this->Request->approved($id);
        if ($approved) {
            $this->session->set_flashdata('notif', $this->flash->successFlash());
            redirect('request-edit/' . $id);
        } else {
            $this->session->set_flashdata('notif', $this->flash->failedFlash());
            redirect('request-edit/' . $id);
        }
    }
}
