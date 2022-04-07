<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login(){

        if(cekUser()){
            return redirect()->to(base_url());
        }

        $data = [];

        if($this->request->getMethod() == 'post'){
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email atau Password Tidak Sama",
                ],
            ];

            if(!$this->validate($rules, $errors)){
                return view('login', [
                    'validation' => $this->validator,
                ]);
            } else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();
                
                // Menyimpan Nilai Session
                $this->setUserSession($user);

                // Disini Kondisi Yah
                if($user['level'] == 3){

                }else if($user['level'] == 2){

                }else if($user['level'] == 1){
                    return redirect()->to(base_url());
                }
            }
        }

        return view('login');
    }

    public function register(){
        try {
            $data = $this->request->getVar();
            $this->userModel->insert([
                'email' => $data['email_register'], 
                'nama_depan' => $data['nama_depan_register'],
                'nama_belakang' => $data['nama_belakang_register'],
                'nama_lengkap' => $data['nama_lengkap_register'],
                'no_hp' => $data['no_hp_register'],
                'password' => password_hash($data['password_register'], PASSWORD_DEFAULT),
                'plain_password' => $data['password_register'],
                'alamat_pengiriman' => $data['alamat_register']
            ]);
    
            return redirect()->to(base_url('login'))->with('status', 'success');
        } catch (\Exception $th) {
            var_dump($th);
            // return redirect()->to(base_url('login'))->with('status', 'failed');
        }
    }

    private function setUserSession($user){
        $data = [
            'id_user' => $user['id_user'],
            'email' => $user['email'],
            'nama_lengkap' => $user['nama_lengkap'],
            'avatar' => $user['avatar'],
            'no_hp' => $user['no_hp'],
            'level' => $user['level'],
            'isLoggedIn' => true
        ];

        session()->set($data);
        return true;
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

    public function hash_password(){
        return password_hash("12345678", PASSWORD_DEFAULT);
    }
}
