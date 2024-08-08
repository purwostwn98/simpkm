<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $data = [
            "sidebar" => ["reviewer-dashboard", ""]
        ];
        return view('reviewer/dashboard', $data);
    }

    public function detail(): string
    {
        $data = [
            "sidebar" => ["reviewer-dashboard", ""]
        ];
        return view('reviewer/index', $data);
    }
}
