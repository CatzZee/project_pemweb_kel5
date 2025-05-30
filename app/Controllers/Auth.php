<?php

namespace App\Controllers;

use App\Models\UserModel;


class Auth extends BaseController
{
    public function login()
    {
        if (!session()->get('isLoggedIn')) {
            return view('auth/login');
        }else{
            return redirect()->to('Dashboard');
        }
        
    }

    public function loginProcess()
    {
        $session = session();
        $model = new UserModel();
    
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
    
        $user = $model->where('username', $username)->first();
    
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set('isLoggedIn', true);
                $session->set('username', $user['username']);
                return redirect()->to('/Dashboard');
            } else {
                return redirect()->back()->with('error', 'Password atau Username salah');
            }
        } else {
            return redirect()->back()->with('error', 'Password atau Username salah');
        }
    }
    

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/Login');
    }
}
