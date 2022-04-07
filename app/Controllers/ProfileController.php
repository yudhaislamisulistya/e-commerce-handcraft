<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionModel;
use App\Models\UserModel;

class ProfileController extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->transactionModel = new TransactionModel();
    }
    public function index()
    {
        $data = $this->transactionModel->where('id_user', get_id_user())
            ->get()->getResult();

        return view('profil', compact('data'));
    }

    public function change_profile()
    {
        try {
            $data = $this->request->getVar();
            $this->userModel->update($data['id_user'], [
                'nama_lengkap' => $data['nama_lengkap'], 
                'no_hp' => $data['nomor_handphone']
            ]);
            return redirect()->to(base_url('my-profile'))->with('status', 'success');
        } catch (\Exception $th) {
            return redirect()->to(base_url('my-profile'))->with('status', 'failed');
        }
    }

    public function change_password()
    {
        try {
            $data = $this->request->getVar();

            if($data['password_baru'] != $data['konfirmasi_password_baru']){
                return redirect()->to(base_url('my-profile'))->with('status', 'pass_failed');
            }
            $this->userModel->update($data['id_user'], [
                'password' => password_hash($data['password_baru'], PASSWORD_DEFAULT),
                'plain_password' => $data['password_baru']
            ]);
            return redirect()->to(base_url('my-profile'))->with('status', 'success');
        } catch (\Exception $th) {
            return redirect()->to(base_url('my-profile'))->with('status', 'failed');
        }
    }

    public function change_address()
    {
        try {
            $data = $this->request->getVar();

            $this->userModel->update($data['id_user'], [
                'alamat_pengiriman' => $data['alamat_pengiriman']
            ]);
            return redirect()->to(base_url('my-profile'))->with('status', 'success');
        } catch (\Exception $th) {
            return redirect()->to(base_url('my-profile'))->with('status', 'failed');
        }
    }
}
