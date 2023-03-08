<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index()
    {
        // ini acara update di rumah
        return view('acara/get');
    }
}
