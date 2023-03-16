<?php

namespace App\Controllers;

class Acara extends BaseController
{
    function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        // cara 1 : menggunakan query builder
        $builder = $this->db->table('acara');
        $query = $builder->get();

        // cara 2 : menggunakan query biasa manual
        // $query = $this->db->query("SELECT * FROM acara");

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
        $this->db->table('acara')->insert($data);

        // cara 2 : name spesifik
        // $data = [
        //     'name_acara' => $this->request->getVar('name_acara'),
        //     'date_acara' => $this->request->getVar('date_acara'),
        //     'info_acara' => $this->request->getVar('info_acara'),
        // ];
        return redirect()->to(site_url('acara'))->with('success', 'data berhasil disimpan');
    }

    public function edit($id = null)
    {
        if($id != null) {
            $query = $this->db->table('acara')->getWhere(['id_acara' => $id]);
            if($query->resultID->num_rows > 0) {
                $data['acara'] = $query->getRow();
                return view('acara/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        // cara 1 jika name sama
        // $data = $this->request->getPost();
        // unset($data['_method']);

        // cara 2 : name spesifik
        $data = [
            'name_acara' => $this->request->getVar('name_acara'),
            'date_acara' => $this->request->getVar('date_acara'),
            'info_acara' => $this->request->getVar('info_acara'),
        ];

        $this->db->table('acara')->where(['id_acara' => $id])->update($data);
        return redirect()->to(site_url('acara'))->with('success', 'perubahan data berhasil disimpan');
    }

    public function destroy($id)
    {
        $this->db->table('acara')->where(['id_acara' => $id])->delete();
        return redirect()->to(site_url('acara'))->with('danger', 'data berhasil dihapus');
    }
}
