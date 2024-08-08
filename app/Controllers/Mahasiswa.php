<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function dashboard(): string
    {
        return view('mahasiswa/dashboard');
    }

    public function proposal_diajukan(): string
    {
        return view('mahasiswa/proposal_diajukan');
    }

    public function detail_proposal()
    {
        return view('mahasiswa/detail_proposal');
    }
}
