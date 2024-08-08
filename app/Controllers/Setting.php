<?php

namespace App\Controllers;

class Setting extends BaseController
{
    public function index(): string
    {
        return view('proposal_lolos/index');
    }

    public function detail(): string
    {
        return view('proposal_lolos/detail');
    }
}
