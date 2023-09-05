<?php

namespace App\Controllers;

use App\Models\GuruModel;

class Guru extends BaseController
{
    protected $guruModel;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->guruModel = new GuruModel();
    }

    public function index(): string
    {
        $guru = $this->guruModel->getGuru();

        $data = [
            'judul' => 'Data Guru',
            'guru' => $guru,
        ];

        return view('guru/index', $data);
    }

    public function tambah()
    {
        return view('guru/tambah');
    }

    public function add()
    {
        $this->guruModel->save([
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp'),
            'ampuan' => $this->request->getVar('ampuan'),
            'alamat' => $this->request->getVar('alamat'),
        ]);

        return redirect('guru');
    }
}
