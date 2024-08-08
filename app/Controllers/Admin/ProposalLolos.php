<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ProposalLolos extends BaseController
{
    public function index(): string
    {
        $data = [
            "sidebar" => ["admin-proposal-lolos", ""]
        ];
        return view('proposal_lolos/index', $data);
    }

    public function detail(): string
    {
        $data = [
            "sidebar" => ["admin-proposal-lolos", ""]
        ];
        return view('proposal_lolos/detail', $data);
    }
}
