<?php


namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $data = [
            "sidebar" => ["admin-dashboard", ""]
        ];
        return view('admin/dashboard', $data);
    }
}
