<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function dashboard(): string
    {
        $data = [
            "sidebar" => ["dashboard", ""]
        ];
        return view('mahasiswa/dashboard', $data);
    }

    public function proposal_diajukan(): string
    {
        $data = [
            "sidebar" => ["proposal-diajukan", ""]
        ];
        return view('mahasiswa/proposal_diajukan', $data);
    }

    public function detail_proposal()
    {
        $data = [
            "sidebar" => ["proposal-diajukan", ""]
        ];
        return view('mahasiswa/detail_proposal', $data);
    }

    public function formulir_unggah()
    {
        $data = [
            "sidebar" => ["proposal-diajukan", ""]
        ];
        return view('mahasiswa/formulir_unggah', $data);
    }
}
