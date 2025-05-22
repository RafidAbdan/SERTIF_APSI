<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa'); //load model
        $this->load->helper('url'); //load url helper
        $this->load->library('session'); //load session library
    }
    public function index()
    {
        $data = array(
            'title' => 'Data Mahasiswa',
            'subtitle' => '',
            'page' => 'mahasiswa/v_mahasiswa',//file view di folder view
            'mhs' => $this->m_mahasiswa->all_data(), //ambil data dari model
        );
        $this->load->view('v_template',$data, false); //template
    }

    public function input_mahasiswa()
    {
        //Validasi form input
        $this->form_validation->set_rules('nim', 'NIM', 'required',[
            'required' => '%s Harus Diisi'
        ]);
        $this->form_validation->set_rules('nama_mahasiswa', 'nama mahasiswa', 'required',[
            'required' => '%s Harus Diisi'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required',[
            'required' => '%s Harus Diisi'
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required',[
            'required' => '%s Harus Diisi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required',[
            'required' => '%s Harus Diisi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            //jika validasi gagal
            $data = array(
                'title' => 'Input Mahasiswa',
                'page' => 'mahasiswa/v_input_mahasiswa'//file view di folder view
            );
            $this->load->view('v_template',$data, false); //template
        } else {
            //jika validasi berhasil
            $data = array(
                'nim' => $this->input->post('nim'),
                'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin')
            );
            $this->m_mahasiswa->insert_data($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('mahasiswa/index');
        }
    }
        
    public function edit_mahasiswa($id_mahasiswa){

         //Validasi form input
        $this->form_validation->set_rules('nim', 'NIM', 'required',[
            'required' => '%s Harus Diisi'
        ]);
        $this->form_validation->set_rules('nama_mahasiswa', 'nama mahasiswa', 'required',[
            'required' => '%s Harus Diisi'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required',[
            'required' => '%s Harus Diisi'
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required',[
            'required' => '%s Harus Diisi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required',[
            'required' => '%s Harus Diisi'
        ]);
        $data = array(
            'title' => 'Edit Mahasiswa',
            'page' => 'mahasiswa/v_edit_mahasiswa',//file view di folder view
            'mhs' => $this->m_mahasiswa->detail_data($id_mahasiswa), //ambil data dari id mahasiswa
        );
        $this->load->view('v_template',$data, false); //template
        if ($this->form_validation->run() == FALSE) {
            //jika validasi gagal
            $data = array(
                'title' => 'Input Mahasiswa',
                'page' => 'mahasiswa/v_input_mahasiswa'//file view di folder view
            );
            $this->load->view('v_template',$data, false); //template
        } else {
            //jika validasi berhasil
            $data = array(
                'id_mahasiswa' => $id_mahasiswa,
                'nim' => $this->input->post('nim'),
                'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin')
            );
            $this->m_mahasiswa->update_data($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diubah');
            redirect('mahasiswa/index');
        }
    }

    public function hapus_mahasiswa($id_mahasiswa)
    {
        $data = array(
            'title' => 'Hapus Mahasiswa',
            'mhs' => $this->m_mahasiswa->detail_data($id_mahasiswa), //ambil data dari id mahasiswa
        );
        $this->load->view('v_template',$data, false); //template
        $this->m_mahasiswa->delete_data($id_mahasiswa);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('mahasiswa/index');
    }
   
}