<?php

namespace App\Controllers\Pembimbing;

use App\Controllers\BaseController;

class Proposal extends BaseController
{
    public function proposal_verifikasi(): string
    {
        $data = [
            "sidebar" => ["proposal", "proposal-verifikasi"]
        ];
        return view('pembimbing/proposal_verifikasi', $data);
    }

    public function proposal_verifikasi_detail(): string
    {
        $data = [
            "sidebar" => ["proposal", "proposal-verifikasi"]
        ];
        return view('pembimbing/proposal_verifikasi_detail', $data);
    }

    public function proposal_proses(): string
    {
        $data = [
            "sidebar" => ["proposal", "proposal-proses"]
        ];
        return view('pembimbing/proposal_proses', $data);
    }

    public function proposal_proses_detail(): string
    {
        $data = [
            "sidebar" => ["proposal", "proposal-proses"]
        ];
        return view('pembimbing/proposal_proses_detail', $data);
    }

    public function proposal_telah_direview(): string
    {
        $data = [
            "sidebar" => ["proposal", "proposal-direview"]
        ];
        return view('pembimbing/proposal_telah_direview', $data);
    }
}
