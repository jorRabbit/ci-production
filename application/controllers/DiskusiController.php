<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DiskusiController extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->loggedIn();
        $this->load->model('Diskusi');
        $this->load->model('Flashdata', 'flash');
    }

    public function rules($q)
    {
        if ($q == '1') {
            return [

                [
                    'field' => 'idreqchild',
                    'label' => 'idreqchild',
                    'rules' => 'required|max_length[11]|is_natural'
                ],


                [
                    'field' => 'subject',
                    'label' => 'subject',
                    'rules' => 'required|max_length[36]'
                ],

                [
                    'field' => 'komentar',
                    'label' => 'komentar',
                    'rules' => 'required|max_length[250]'
                ],
            ];
        } elseif ($q == '2') {
            return [
                [
                    'field' => 'subject',
                    'label' => 'subject',
                    'rules' => 'required|max_length[36]'
                ],

                [
                    'field' => 'komentar',
                    'label' => 'komentar',
                    'rules' => 'required|max_length[250]'
                ],

                // [
                //     'field' => 'gambar',
                //     'label' => 'Nama Dokumen',
                //     'rules' => 'callback_checkGambar'
                // ],

            ];
        }
    }

    public function index()
    {
        $dt = array(
            'grup'      => 'Hone', 'menu' => 'Home', 'sub' => 'View',
            'data'      => $this->Diskusi->view()->result(),
            'content'    => 'diskusi/view',
        );

        $this->theme($dt);
    }

    public function add($id, $idr)
    {
        $this->form_validation->set_rules($this->rules('1'));
        if ($this->form_validation->run() === false) {
            $dt = array(
                'grup'      => 'Diskusi', 'menu' => 'Diskusi', 'sub' => 'Add',
                'data'      => $this->db->get_where('tb_request_child', array('id_request_child' => $id))->first_row(),
                'content'   => 'diskusi/add',
            );
            $this->theme($dt);
        } elseif ($this->Diskusi->validreqchild($id)) {
            $this->session->set_flashdata('notif', $this->flash->dataUsedFlash());
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $add = $this->Diskusi->add($id);
            $idk = $this->db->insert_id();
            $addchild = $this->Diskusi->addchild($idk);
            if ($add && $addchild) {
                $this->session->set_flashdata('notif', $this->flash->successFlash());
                redirect('request-edit/' . $idr);
            } else {
                $this->session->set_flashdata('notif', $this->flash->failedFlash());
                redirect('request-edit/' . $idr);
            }
        }
    }

    public function show($id)
    {
        $this->form_validation->set_rules($this->rules('2'));
        if ($this->form_validation->run() === false) {
            $dt = array(
                'grup'      => 'Diskusi', 'menu' => 'Diskusi', 'sub' => 'Delete',
                'data'        => $this->Diskusi->find($id)->first_row(),
                'datachild' => $this->Diskusi->showchild($id)->result(),
                'content'    => 'diskusi/show',
            );
            $this->theme($dt);
        } else if (empty($_FILES['gambar']['name'])) {
            $this->session->set_flashdata('notif', $this->flash->fotoFailedFlash());
            redirect('diskusi-show/' . $id);
        } else {
            // echo 'eksekusi';
            $addchild = $this->Diskusi->addchild($id);
            $idc = $this->db->insert_id();
            if ($addchild) {
                $this->simpanFoto($idc);
                $this->session->set_flashdata('notif', $this->flash->successFlash());
                redirect('diskusi-show/' . $id);
            } else {
                $this->session->set_flashdata('notif', $this->flash->failedFlash());
                redirect('diskusi-show/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $delete = $this->Product->delete($id);
        if ($delete) {
            $this->session->set_flashdata('notif', $this->flash->successFlash());
            redirect('produk');
        } else {
            $this->session->set_flashdata('notif', $this->flash->failedFlash());
            redirect('produk');
        }
    }

    public function photo()
    {
        $id = $_SESSION['userId'];
        $this->findtoFalseRcr('tb_diskusi_child', 'id_diskusi_child', $id);

        $this->form_validation->set_rules($this->rules('2'));

        if ($this->form_validation->run() === false) {
            $dt = array(
                'grup'      => 'profil', 'menu' => 'Photo', 'sub' => 'Upload',
                'data'        => $this->Diskusi->find_profil()->first_row(),
                'content'    => 'recruitment/profil/photo',
            );
            $this->themeRcr($dt);
        } elseif (!$this->Diskusi->findbyApl()) {
            $this->session->set_flashdata('notif', $this->flash->flashAll('U'));
            redirect('diskusi-show');
        } else {
            $upload = $this->simpanFoto($id);
            if ($upload) {
                $this->session->set_flashdata('notif', $this->flash->flashAll('Y'));
                redirect('diskusi-show');
            } else {
                $this->session->set_flashdata('notif', $this->flash->flashAll('N'));
                redirect('diskusi-show');
            }
        }
    }

    function simpanFoto($id)
    {
        $config['image_library']    = 'gd2';
        $config['upload_path']      = './assets/images/images-diskusi'; //path folder
        $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['overwrite']        = true;
        $config['encrypt_name']     = false;
        $config['file_name']        = $id;
        $config['create_thumb']     = false;
        $config['maintain_ratio']   = true;
        // $config['max_width']        = 4032;
        // $config['max_height']       = 2268;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!empty($_FILES['gambar']['name'])) {
            if ($this->upload->do_upload('gambar')) {
                $gbr    = $this->upload->data();
                $gambar = $gbr['file_name']; //Mengambil file name dari gambar yang diupload
                $this->Diskusi->changeFotoDiskusi($id, $gambar);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    // validasi jika tidak mengupload gambar
    public function checkGambar()
    {
        if (empty($_FILES['gambar']['name'])) {
            $this->form_validation->set_message('checkGambar', 'Gambar Tidak Boleh Kosong');
            return false;
        }

        return true;
    }

    public function done($id)
    {
        $done = $this->Diskusi->done($id);
        if ($done) {
            $this->session->set_flashdata('notif', $this->flash->successFlash());
            redirect('diskusi-show/' . $id);
        } else {
            $this->session->set_flashdata('notif', $this->flash->failedFlash());
            redirect('diskusi-show/' . $id);
        }
    }
}
