<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index()
    {
        // ini acara
        return view('acara/get');
    }
}
