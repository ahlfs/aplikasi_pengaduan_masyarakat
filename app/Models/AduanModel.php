<?php

namespace App\Models;

use CodeIgniter\Model;

class AduanModel extends Model
{
    protected $table      = 'aduan';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'telp', 'wilayah', 'judul', 'keluhan', 'created_by'];

    public function getAduan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}