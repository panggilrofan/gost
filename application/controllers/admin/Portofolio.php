<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Portofolio extends CI_Controller{

public function __construct()
{
parent::__construct();
    // form_validation sudah di panggil di autoload

    $this->load->model('M_portofolio'); // memanggil model
}

function index() // halaman daftar portofolio
{
    $data['title'] = 'Daftar Portofolio';
    // mendapatkan data dari tabel portofolio
    $data['daftar_portofolio'] = $this->db->get('portofolio')->result_array();
    $this->load->view('header', $data);
    $this->load->view('admin/daftar_portofolio', $data);
    $this->load->view('footer');
}

function tambahPortofolio() // halaman tambah data portofolio
{
    $data['title'] = 'Tambah Data';
    $this->M_portofolio->rulesTambahEdit();
    if ($this->form_validation->run() == false) {
        $this->load->view('header', $data);
        $this->load->view('admin/tambah_portofolio');
        $this->load->view('footer');
    }else{
        $this->M_portofolio->prosesTambahData(); // load method untuk tambah data
    }

}

function hapusPortofolio()
{
  $this->M_portofolio->prosesHapusdata(); // load method untuk hapus data
}

function editPortofolio() // halaman edit data portofolio
{
  $data['title'] = 'Edit Portofolio';
  $this->M_portofolio->rulesTambahEdit();
  if ($this->form_validation->run() == false) {
      $this->load->view('header', $data);
      $this->load->view('admin/edit_portofolio');
      $this->load->view('footer');
  }else{
      $this->M_portofolio->prosesEditData(); // load method untuk edit data
  }
}

}
?>
