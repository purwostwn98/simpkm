<?php

namespace App\Controllers;

class Reviewer extends BaseController
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
