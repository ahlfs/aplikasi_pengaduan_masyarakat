<?php

namespace App\Controllers;

use App\Models\AduanModel;

class AduanUser extends BaseController
{
    protected $aduanModel;
    public function __construct()
    {
        $this->aduanModel = new AduanModel();
        $this->session = session();
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        
    }

    public function save()
    {
        $username = session('username'); // Ambil username dari session

        // validation
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
            ],
            'telp' => [
                'rules' => 'required|max_length[13]',
            ],
            'wilayah' => [
                'rules' => 'required',
            ],
            'judul' => [
                'rules' => 'required',
            ],
            'keluhan' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/user/add')->withInput()-> with('validation', $validation);
            
        }

        $this->aduanModel->save([
            'name' => $this->request->getVar('name'),
            'telp' => $this->request->getVar('telp'),
            'wilayah' => $this->request->getVar('wilayah'),
            'judul' => $this->request->getVar('judul'),
            'keluhan' => $this->request->getVar('keluhan'),
            'created_by' => $username,
            
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/user/add');
    }

    public function delete($id)
    {
        $this->aduanModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/user/show');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Kelahiran',
            'validation' => \Config\Services::validation(),
            'aduan' => $this->aduanModel->getAduan($id)
        ];

        return view('user/EditAduanUser', $data);
    }

    public function update($id) {
        // validation
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
            ],
            'telp' => [
                'rules' => 'required|max_length[13]',
            ],
            'wilayah' => [
                'rules' => 'required',
            ],
            'judul' => [
                'rules' => 'required',
            ],
            'keluhan' => [
                'rules' => 'required',
            ]
        ])) {   
            $validation = \Config\Services::validation();
            return redirect()->to('/aduanUser/edit/' . $this->request->getVar('id'))->withInput()-> with('validation', $validation);
        }

        $this->aduanModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'telp' => $this->request->getVar('telp'),
            'wilayah' => $this->request->getVar('wilayah'),
            'judul' => $this->request->getVar('judul'),
            'keluhan' => $this->request->getVar('keluhan'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diedit.');
        return redirect()->to('/user/show');
    }

}
