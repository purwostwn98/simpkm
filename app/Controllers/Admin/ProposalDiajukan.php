<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;


class ProposalDiajukan extends BaseController
{
    public function index(): string
    {
        $data = [
            "sidebar" => ["admin-proposal-diajukan", ""]
        ];
        return view('proposal_diajukan/index', $data);
    }

    public function detail(): string
    {
        $data = [
            "sidebar" => ["admin-proposal-diajukan", ""]
        ];
        return view('proposal_diajukan/detail', $data);
    }
}
