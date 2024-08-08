<?php

namespace App\Controllers;

class ProposalReview extends BaseController
{
    public function index(): string
    {
        $data = [
            "sidebar" => ["review-proposal-diajukan", ""]
        ];
        return view('proposal_review/index', $data);
    }

    public function detail(): string
    {
        $data = [
            "sidebar" => ["review-proposal-diajukan", ""]
        ];
        return view('proposal_review/detail', $data);
    }
}
