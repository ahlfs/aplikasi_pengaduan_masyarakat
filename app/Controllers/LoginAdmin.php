<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AduanModel;

class LoginAdmin extends BaseController
{
    protected $aduanModel;
    public function __construct()
    {
        $this->session = session();
        $this->aduanModel = new AduanModel();
    }
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        
        //cek role dari session
        if($this->session->get('role') != 1){
            return redirect()->to('/LoginUser');
        }

        $aduan = $this->aduanModel->findAll();
        $data = [
            'aduan' => $aduan
        ];
        return view('admin/index', $data);
        
    }
    
}