<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AduanModel;

class User extends BaseController
{
    protected $aduanModel;

    public function __construct()
    {
        $this->session = session();
        $this->aduanModel = new AduanModel();
        
        
    }


    public function AddAduanUser(): string
    {
        $data = [
            'title' => 'Input Data Aduan Masyarakat',
            'validation' => \Config\Services::validation()
        ];

        return view('user/AddAduanUser', $data);
    }

    public function Show(): string
    {
        $aduan = new AduanModel();
        $username = session('username'); // Ambil username dari session
        $aduan = $aduan->find('created_by', $username);
        $aduan = array();
        $data = [
            'title' => 'Input Data Aduan Masyarakat',
            'validation' => \Config\Services::validation(),
            'aduan' => $aduan
        ];
        
        $data = $this->aduanModel->table('aduan')
    ->where('created_by', $username)
    ->get()
    ->getResult();
        
        return view('user/show', ['data' => $data]);
    }

    public function Home(): string
    {
        return view('user/home');
    }
}
