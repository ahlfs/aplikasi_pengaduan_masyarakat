<?php

namespace App\Controllers;

class LoginUser extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    
    }
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        $data = [
            'title' => 'Input Data Kelahiran Sleman',
            'validation' => \Config\Services::validation()
        ];
        
        return view('user/home', $data);
    }

    public function Logout()
    {
        $this->session->destroy(); // Menghapus semua data session yang telah diset
    
        // Redirect ke halaman login
        return redirect()->to('/auth/login');
    }

    
}