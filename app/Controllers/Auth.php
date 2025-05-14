<?php

namespace App\Controllers;

use League\OAuth2\Client\Provider\Google;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login'); // Menampilkan halaman login
    }

    public function register()
    {
        return view('register'); // Menampilkan halaman registrasi
    }

    public function loginProcess()
    {
        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->loginUser($email, $password);

        if ($user) {
            session()->set([
                'logged_in' => true,
                'user'      => [
                    'name'   => $user['name'],
                    'email'  => $user['email'],
                    'avatar' => $user['avatar']
                ]
            ]);
            session()->regenerate();
            return redirect()->to('/dashboard');
        }

        return redirect()->back()->with('error', 'Email atau password salah.');
    }

    public function registerProcess()
{
    $session = session();
    $userModel = new UserModel();

    $name = $this->request->getPost('name');
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    $avatar = $this->request->getPost('avatar') ?? 'icon.jpg';
    $google_id = $this->request->getPost('google_id') ?? NULL; // Pastikan NULL jika tidak ada

    if (empty($name) || empty($email) || empty($password)) {
        $session->setFlashdata('error', 'Semua bidang wajib diisi!');
        return redirect()->to('/auth/register')->withInput();
    }

    if ($userModel->where('email', $email)->first()) {
        $session->setFlashdata('error', 'Email sudah digunakan!');
        return redirect()->to('/auth/register')->withInput();
    }

    $data = [
        'name'       => $name,
        'email'      => $email,
        'password'   => password_hash($password, PASSWORD_DEFAULT),
        'avatar'     => $avatar,
        'google_id'  => $google_id,
        'created_at' => date('Y-m-d H:i:s')
    ];

    $userModel->insert($data);
    $session->setFlashdata('success', 'Registrasi berhasil, silakan login.');
    return redirect()->to('/auth/login');
}

    public function googleLogin()
    {
        $provider = new Google([
            'clientId'     => getenv('GOOGLE_CLIENT_ID'),
            'clientSecret' => getenv('GOOGLE_CLIENT_SECRET'),
            'redirectUri'  => getenv('GOOGLE_REDIRECT_URI'),
        ]);

        $authUrl = $provider->getAuthorizationUrl();
        session()->set('oauth2state', $provider->getState());

        return redirect()->to($authUrl);
    }

    public function googleCallback()
    {
        try {
            $provider = new Google([
                'clientId'     => getenv('GOOGLE_CLIENT_ID'),
                'clientSecret' => getenv('GOOGLE_CLIENT_SECRET'),
                'redirectUri'  => getenv('GOOGLE_REDIRECT_URI'),
            ]);
    
            if (!$this->request->getGet('state') || $this->request->getGet('state') !== session()->get('oauth2state')) {
                session()->remove('oauth2state');
                return redirect()->to('/auth/login')->with('error', 'Invalid OAuth state.');
            }
    
            $token = $provider->getAccessToken('authorization_code', [
                'code' => $this->request->getGet('code')
            ]);
    
            $googleUser = $provider->getResourceOwner($token);
    
            $userData = [
                'google_id' => $googleUser->getId(),
                'name'      => $googleUser->getName(),
                'email'     => $googleUser->getEmail(),
                 'avatar'    => $googleUser->getAvatar() ?? 'https://via.placeholder.com/100'
            ];

            if (empty($user['avatar'])) {
                $user['avatar'] = base_url('uploads/icon.jpg');
            }
    
            $userModel = new UserModel();
            $userModel->saveOrUpdateUser($userData);
    
            session()->set([
                'logged_in' => true,
                'user'      => $userData
            ]);
            session()->regenerate();
            return redirect()->to('/dashboard');
        } catch (\Exception $e) {  
            return redirect()->to('/auth/login')->with('error', 'Google login error: ' . $e->getMessage());
        }
    }
    

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
