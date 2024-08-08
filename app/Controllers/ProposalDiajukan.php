<?php

namespace App\Controllers;

class ProposalDiajukan extends BaseController
{
    public function index(): string
    {
        return view('proposal_diajukan/index');
    }

    public function detail(): string
    {
        return view('proposal_diajukan/detail');
    }
}
