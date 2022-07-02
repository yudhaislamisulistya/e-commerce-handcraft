<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CartModel;
use App\Models\JasaModel;
use App\Models\ProdukModel;
use CodeIgniter\API\ResponseTrait;

class ProdukController extends BaseController
{

    use ResponseTrait;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->cartModel = new CartModel();
        $this->jasaModel = new JasaModel();
    }
    public function index()
    {
        $data = $this->produkModel->get()->getResult();
        $data_jasa = $this->jasaModel->get()->getResult();
        return view('produk', compact('data', 'data_jasa'));
    }

    public function product_detail($slug = null)
    {
        try {
            if($slug != null){
                $data = $this->produkModel->like('slug', $slug)->first();
            }else{
                return redirect()->to(base_url());
            }

            return view('produk-detail', compact('data'));
        } catch (\Exception $th) {
            return redirect()->to(base_url());
        }
    }

    public function service_detail($slug = null){
        try {
            if($slug != null){
                $data = $this->jasaModel->like('slug', $slug)->first();
            }else{
                return redirect()->to(base_url());
            }

            return view('service-detail', compact('data'));
        } catch (\Exception $th) {
            return redirect()->to(base_url());
        }
    }

    public function add_update_cart(){
        try {
            $data = $this->request->getVar();
            
            $this->cartModel->replace(
                [
                    'id_user' => $data['id_user'],
                    'id_produk' => $data['id_produk'],
                    'jumlah_beli' => $data['jumlah'],
                ]
            );
            return redirect()->to(base_url($data['url']))->with('status', 'success');
        } catch (\Exception $th) {
            return redirect()->to(base_url($data['url']))->with('status', 'failed');
        }
    }

    public function get_services(){
        try {
            $data = $this->jasaModel->get()->getResult();
            if(!$data){
                return $this->respond(
                    [
                        'code' => 404,
                        'status' => 'failed', 
                        'message' => 'Data tidak ditemukan'
                    ]
                );
            }

            return $this->respond(
                [
                    'row' => count($data),
                    'code' => 200,
                    'status' => 'success',
                    'data' => $data
                ]
            );
        } catch (\Exception $th) {
            return $this->fail($th, 406);
        }
    }

    public function get_product_with_type($types = null)
    {
        // 1 : Hantaran
        // 2 : Busana/Pakaian
        // 3 : Kriya Kayu
        // 4 : Penyewaan Jasa
        try {
            if($types != null){
                $data = $this->produkModel->where('id_jenis_produk', $types)->limit(8)
                    ->get()->getResult();
            }else{
                $data = $this->produkModel->get()->getResult();
            }

            if(!$data){
                return $this->respond([
                    'code' => 400,
                    'data' => 'data tidak tersedia'
                ]);
            }
            return $this->respond([
                'code' => 200,
                'row' => count($data),
                'data' => $data,
            ], 200);
        } catch (\Exception $th) {
            return $this->fail($th, 406);
        }
    }

    public function get_product_one_new(){
        try {
            $data = $this->produkModel->orderBy('id_produk', 'DESC')->limit(1)
                ->first();

            if(!$data){
                return $this->respond([
                    'code' => 400,
                    'data' => 'data tidak tersedia'
                ]);
            }
            return $this->respond([
                'code' => 200,
                'data' => $data,
            ], 200);
        } catch (\Exception $th) {
            return $this->fail($th, 406);
        }
    }

    public function search(){
        $search = $this->request->getVar('pencarian');
        $data = $this->produkModel->get()->getResult();
        return view('search', compact('data', 'search'));
    }

    public function search_category($search = null){
        $data = $this->produkModel->get()->getResult();
        return view('search', compact('data', 'search'));
    }
}
