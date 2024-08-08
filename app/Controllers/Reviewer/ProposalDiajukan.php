<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;

class ProposalDiajukan extends BaseController
{
    public function index(): string
    {
        $data = [
            "sidebar" => ["reviewer-proposal-diajukan", ""]
        ];
        return view('reviewer/proposal_diajukan', $data);
    }

    public function detail(): string
    {
        $data = [
            "sidebar" => ["reviewer-proposal-diajukan", ""]
        ];
        return view('reviewer/proposal_diajukan_detail', $data);
    }
}
