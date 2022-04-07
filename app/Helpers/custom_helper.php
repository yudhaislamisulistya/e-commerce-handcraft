<?php

use App\Models\CartModel;
use App\Models\FeedbackModel;
use App\Models\JenisProdukModel;
use App\Models\ProdukModel;
use App\Models\PurchaseModel;
use App\Models\TransactionModel;
use App\Models\UserModel;
use CodeIgniter\I18n\Time;

function cekUser(){
    if(session()->get('isLoggedIn')){
        return true;
    }else{
        return false;
    }
}

function get_nama_lengkap(){
    $userModel = new UserModel();
    $data = $userModel->where('id_user', get_id_user())
        ->first();
    return $data['nama_lengkap'];
}

function get_nama_depan(){
    $userModel = new UserModel();
    $data = $userModel->where('id_user', get_id_user())
        ->first();
    return $data['nama_depan'];
}

function get_nama_belakang(){
    $userModel = new UserModel();
    $data = $userModel->where('id_user', get_id_user())
        ->first();
    return $data['nama_belakang'];
}

function get_email(){
    $userModel = new UserModel();
    $data = $userModel->where('id_user', get_id_user())
        ->first();
    return $data['email'];
}

function get_nomor_handphone(){
    $userModel = new UserModel();
    $data = $userModel->where('id_user', get_id_user())
        ->first();
    return $data['no_hp'];
}

function get_alamat_pengiriman(){
    $userModel = new UserModel();
    $data = $userModel->where('id_user', get_id_user())
        ->first();
    return $data['alamat_pengiriman'];
}

function get_id_user(){
    return session()->get('id_user');
}

function format_rupiah($angka){
    $rupiah = number_format($angka, 0, ',', '.');
    return $rupiah;
}

function get_jenis_produk($id_jenis_produk){
    $jenisProdukModel = new JenisProdukModel();
    $data = $jenisProdukModel->where('id_jenis_produk', $id_jenis_produk)
        ->first();
    return $data['nama_jenis_produk'];
}

function get_feedback_by_product($id_produk){
    $feedbackModel = new FeedbackModel();
    $data = $feedbackModel->getFeedback($id_produk)
        ->getResult();
    return $data;
}

function get_nama_lengkap_by_id_user($id_user){
    $userModel = new UserModel();
    $data = $userModel->where('id_user', $id_user)
        ->first();
    return $data['nama_lengkap'];
}

function format_tanggal($tanggal){
    $time = Time::parse($tanggal, 'Asia/Makassar'); 
    echo $time->toLocalizedString('MMM d yyyy - H:m:ss');   // March 9, 2016
}

function check_add_product($id_produk){
    $cartModel = new CartModel();
    $data = $cartModel->where('id_produk', $id_produk)
        ->where('id_user', get_id_user())
        ->where('status', 1)
        ->first();
    if(!$data){
        return false;
    }
    return true;
}

function get_product_by_id($id_produk){
    $produkModel = new ProdukModel();
    $data = $produkModel->where('id_produk', $id_produk)
        ->first();
    return $data;
}

function total_get_cart(){
    $cartModel = new CartModel();
    $data = $cartModel->getProductById(get_id_user())->getResult();
    return count($data);
}
function get_carts(){
    $cartModel = new CartModel();
    $data = $cartModel->getProductById(get_id_user())->getResult();
    return $data;
}

function testing(){
    return ("Selamat Datang");
}

function get_purcheses_by_id_transction($transcation_id){
    $purcheseModel = new PurchaseModel();
    $data = $purcheseModel->where('transaction_id', $transcation_id)
        ->get()->getResult();
    return $data;
}





?>