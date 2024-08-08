<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('reviewer/dashboard');
    }

    public function detail(): string
    {
        return view('reviewer/index');
    }
}
