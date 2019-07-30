<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_portofolio extends CI_Model{
    public function rulesTambahEdit()
    {
        $rules = [
                    [
                        'field' => 'judul',
                        'label' => 'Judul',
                        'rules' => 'required|trim'
                    ],
                    [
                        'field' => 'jenis',
                        'label' => 'Jenis',
                        'rules' => 'required|trim'
                    ],
                    [
                        'field' => 'gambar',
                        'label' => 'Gambar',
                        'rules' => 'required|trim'
                    ],
                    [
                        'field' => 'link',
                        'Label' => 'Link',
                        'rules' => 'required|trim|valid_url'
                    ]
        ];

        $this->form_validation->set_rules($rules);
    }

    public function prosesTambahData()
    {
      // TODO: buatkan script tambah data portofolio
    }

    public function prosesEditData()
    {
      // TODO: buakan script edit data portofolio
    }

    public function prosesHapusdata()
    {
      // TODO: buatkan script hapus data portofolio
    }
}
