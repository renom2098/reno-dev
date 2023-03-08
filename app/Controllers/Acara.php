<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index()
    {
        // cara 1 : menggunakan query builder
        $builder    = $this->$db->table('acara');
        $query      = $builder->get();

        // cara 2 : menggunakan query biasa manual
        // $query = $this->db->query("SELECT * FROM acara");

        $data['acara'] = $query->getResult();

        return view('acara/get', $data);
    }
}
