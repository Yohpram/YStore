<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['google_id', 'name', 'email', 'password', 'avatar', 'created_at'];

    /**
     * Mendapatkan user berdasarkan email
     */
    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    /**
     * Menyimpan atau memperbarui user berdasarkan akun Google
     */
    public function saveOrUpdateUser($data)
    {
        $user = $this->getUserByEmail($data['email']);

        if ($user) {
            $this->update($user['id'], $data);
        } else {
            $this->insert($data);
        }
    }

    /**
     * Menyimpan user baru saat registrasi manual
     */
    public function registerUser($data)
    {
        return $this->insert($data);
    }

    /**
     * Memeriksa login manual dengan email & password
     */
    public function loginUser($email, $password)
    {
        $user = $this->getUserByEmail($email);
    
        var_dump($user); // Cek apakah user ditemukan
        if (!$user) {
            die("User tidak ditemukan");
        }
    
        var_dump(password_verify($password, $user['password'])); // Cek password cocok atau tidak
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
    
        die("Password salah");
    }
}
