<?php

namespace App\Controllers;

class ProposalReview extends BaseController
{
    public function index(): string
    {
        return view('proposal_review/index');
    }

    public function detail(): string
    {
        return view('proposal_review/detail');
    }
}
