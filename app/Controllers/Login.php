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
        } else if ($group == 'reviewer') {
            return redirect()->to('/reviewer');
        }
    }
}
