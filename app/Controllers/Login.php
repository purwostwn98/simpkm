<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $group = $this->request->getVar("group");
        $session = session();
        $session->set([
            'group' => $group,
        ]);

        if ($group == 'admin') {
            return redirect()->to('/admin');
        } elseif ($group == 'reviewer') {
            return redirect()->to('/reviewer');
        } elseif ($group == 'mahasiswa') {
            return redirect()->to('/mahasiswa/dashboard');
        } elseif ($group == 'pembimbing') {
            return redirect()->to('/pembimbing/dashboard');
        }
    }
}
