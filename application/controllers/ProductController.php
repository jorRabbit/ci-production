<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductController extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->loggedIn();
        $this->load->model('Product');
        $this->load->model('Flashdata', 'flash');
    }

    public function rules($q)
    {
        if ($q == '1') {
            return [
                [
                    'field' => 'kdproduk',
                    'label' => 'kdproduk',
                    'rules' => 'required|max_length[8]|is_unique[tb_produk.kode_produk]'
                ],

                [
                    'field' => 'namaproduk',
                    'label' => 'namaproduk',
                    'rules' => 'required|max_length[36]|is_unique[tb_produk.kode_produk]'
                ],
            ];
        } elseif ($q == '2') {
            return [
                [
                    'field' => 'namaproduk',
                    'label' => 'namaproduk',
                    'rules' => 'required|max_length[36]|is_unique[tb_produk.kode_produk]'
                ],

            ];
        }
    }

    public function index()
    {
        $dt = array(
            'grup'      => 'Hone', 'menu' => 'Home', 'sub' => 'View',
            'data'      => $this->Product->view()->result(),
            'content'    => 'product/view',
        );

        $this->theme($dt);
    }

    public function add()
    {
        $this->form_validation->set_rules($this->rules('1'));

        if ($this->form_validation->run() === false) {
            $dt = array(
                'grup'      => 'Product', 'menu' => 'Product', 'sub' => 'Add',
                'idevent'   => $this->db->order_by('id_event', 'ASC')->get('tb_event')->result(), // mengambil data dari tabel level urutkan dari nama level terkecil(ASC)
                'content'   => 'product/add',
            );
            $this->theme($dt);
        } else {
            $add = $this->Product->add();
            if ($add) {
                $this->session->set_flashdata('notif', $this->flash->successFlash());
                redirect('product-add');
            } else {
                $this->session->set_flashdata('notif', $this->flash->failedFlash());
                redirect('product-add');
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules($this->rules('2'));

        if ($this->form_validation->run() === false) {
            $dt = array(
                'grup'      => 'Product', 'menu' => 'Product', 'sub' => 'Delete',
                'data'        => $this->Product->find($id)->first_row(),
                'content'    => 'product/edit',
            );
            $this->theme($dt);
        } else {
            // echo 'eksekusi';
            $edit = $this->Product->update($id);
            if ($edit) {
                $this->session->set_flashdata('notif', $this->flash->successFlash());
                redirect('product-edit/' . $id);
            } else {
                $this->session->set_flashdata('notif', $this->flash->failedFlash());
                redirect('product-edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->Product->delete($id);
        if ($delete) {
            $this->session->set_flashdata('notif', $this->flash->successFlash());
            redirect('product');
        } else {
            $this->session->set_flashdata('notif', $this->flash->failedFlash());
            redirect('product');
        }
    }
}
