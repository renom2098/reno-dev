<?php

namespace App\Controllers;



class Acara extends BaseController
{
    public function index()
    {
        // cara 1 : menggunakan query builder
        $builder = $this->$db->table('acara');
        $query = $builder->get();

        // cara 2 : menggunakan query biasa manual
        // $query = $this->$db->query("SELECT * FROM acara");

        $data['acara'] = $query->getResult();

        return view('acara/get', $data);
    }

    public function create()
    {
        return view('acara/add');
    }

    public function store()
    {
        // cara 1 : name sama
        $data = $this->request->getPost();
        $this->$db->table('acara')->insert($data);

        // cara 2 : name spesifik
        $data = [
            'name_acara' => $this->request->getVar('name_acara'),
            'date_acara' => $this->request->getVar('date_acara'),
            'info_acara' => $this->request->getVar('info_acara'),
        ];
        return redirect()->to(site_url('acara'))->with('success', 'data berhasil disimpan');
    }
}
