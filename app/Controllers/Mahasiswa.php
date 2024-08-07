<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function dashboard(): string
    {
        return view('mahasiswa/dashboard');
    }
}
