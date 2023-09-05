<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table            = 'guru';
    protected $allowedFields    = [
        'kode',
        'nama',
        'email',
        'no_telp',
        'ampuan',
        'alamat'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getGuru($kode = false)
    {
        if ($kode == false) {
            return $this->findAll();
        }

        return $this->where(['kode' => $kode])->first();
    }
}
