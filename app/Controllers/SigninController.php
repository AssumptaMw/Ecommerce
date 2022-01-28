<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\HTTP\RedirectResponse;


class SigninController extends Controller
{
    public function index(): string|RedirectResponse
    {
        if (session()->get('isLoggedIn')) {
            return redirect()
                ->to('/');
        }
        return view('login');
    }

    public function loginAuth(): bool|string
    {
        $session = session();

        $userModel = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                unset($data['password']);
                $sessionData = $data;
                $sessionData['isLoggedIn'] = TRUE;

                $session->set($sessionData);
                return json_encode(['status' => true, 'view' => view('home')]);
            } else {
                return json_encode(['status' => false, 'message' => 'Password is incorrect.']);
            }
        } else {
            return json_encode(['status' => false, 'message' => 'Email does not exist.']);
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}