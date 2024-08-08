<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;

class ProposalDiajukan extends BaseController
{
    public function index(): string
    {
        return view('reviewer/proposal_diajukan');
    }

    public function detail(): string
    {
        return view('reviewer/proposal_diajukan_detail');
    }
}
