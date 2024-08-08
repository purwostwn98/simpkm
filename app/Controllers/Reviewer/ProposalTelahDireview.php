<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;

class ProposalTelahDireview extends BaseController
{
    public function index(): string
    {
        return view('reviewer/proposal_telah_direview');
    }

    public function detail(): string
    {
        return view('reviewer/detail_proposal');
    }
}
