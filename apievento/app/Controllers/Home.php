<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Cargar vistas
        return view('documentation/header') . view('documentation/index') . view('documentation/footer');
    }
}
