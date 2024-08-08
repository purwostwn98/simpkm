<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;

class ProposalTelahDireview extends BaseController
{
    public function index(): string
    {
        $data = [
            "sidebar" => ["reviewer-proposal-telah-direview", ""]
        ];
        return view('reviewer/proposal_telah_direview', $data);
    }

    public function detail(): string
    {
        $data = [
            "sidebar" => ["reviewer-proposal-telah-direview", ""]
        ];
        return view('reviewer/detail_proposal', $data);
    }
}
