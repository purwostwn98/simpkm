<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ProposalReview extends BaseController
{
    public function index(): string
    {
        $data = [
            "sidebar" => ["review-proposal-review", ""]
        ];
        return view('proposal_review/index', $data);
    }

    public function detail(): string
    {
        $data = [
            "sidebar" => ["review-proposal-review", ""]
        ];
        return view('proposal_review/detail', $data);
    }
}
