<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\AduanModel;

class Admin extends BaseController
{

    
    protected $akunModel;
    protected $aduanModel;
    public function __construct()
    {
        $this->akunModel = new UserModel();
        $this->aduanModel = new AduanModel();
    }

    public function dashboard(): string
    {

        return view('admin/index');
    }

    public function AddAduanAdmin(): string
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('admin/AddAduanAdmin', $data);
    }

    public function aduan(): string
    {
        $aduan = $this->aduanModel->findAll();
        $data = [
            'title' => 'Input Data Kelahiran Sleman',
            'validation' => \Config\Services::validation(),
            'aduan' => $aduan
        ];

        return view('admin/aduanAdmin', $data);
    }

    public function akuncenter(): string
    {

        $akundata = $this->akunModel->findAll();

        $data = [
            'title' => 'Data Kelahiran Sleman',
            'akundata' => $akundata
        ];

        return view('admin/akun-center', $data);
    }

}
