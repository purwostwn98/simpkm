<?php

namespace App\Controllers\Pembimbing;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $data = [
            "sidebar" => ["dashboard", ""]
        ];
        return view('pembimbing/dashboard', $data);
    }
}
