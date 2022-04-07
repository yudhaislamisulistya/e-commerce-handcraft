<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CartModel;
use CodeIgniter\API\ResponseTrait;

class CartController extends BaseController
{
    use ResponseTrait;
    public function __construct()
    {
        $this->cartModel = new CartModel();
    }
    public function index()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-bniHSwdnbrw5QeP0-qD_7-jS';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;


        $data = $this->cartModel->getProductById(get_id_user())->getResult();

        if(!$data){
            return view('empty-cart');
        }

        $sub_total = 0;
        $items = array();
        $id_keranjang = array();
        foreach ($data as $key => $value) {
            $total = $value->harga * $value->jumlah_beli;
            $sub_total += $total;
            $temp_item = array(
                'id'       => $value->id_produk,
                'price'    => $value->harga,
                'quantity' => $value->jumlah_beli,
                'name'     => $value->nama_produk
            );
            $temp_id_keranjang = array(
                'id_keranjang' => $value->id_keranjang
            );
            array_push($id_keranjang, $temp_id_keranjang);
            array_push($items, $temp_item);
        }



        // Populate customer's billing address
        $billing_address = array(
            'first_name'   => get_nama_depan(),
            'last_name'    => get_nama_belakang(),
            'address'      => get_alamat_pengiriman(),
            'phone'        => get_nomor_handphone(),
            'country_code' => 'IDN'
        );

        // Populate customer's shipping address
        $shipping_address = array(
            'first_name'   => get_nama_depan(),
            'last_name'    => get_nama_belakang(),
            'address'      => get_alamat_pengiriman(),
            'phone'        => get_nomor_handphone(),
            'country_code' => 'IDN'
        );

        // Populate customer's info
        $customer_details = array(
            'first_name'       => get_nama_depan(),
            'last_name'        => get_nama_belakang(),
            'email'            => get_email(),
            'phone'            => get_nomor_handphone(),
            'billing_address'  => $billing_address,
            'shipping_address' => $shipping_address
        );


        $params = [
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $sub_total,
            ),
            'item_details'        => $items,
            'customer_details'    => $customer_details
        ];

        $total_items = count($items);
        $id_keranjang_json = json_encode($id_keranjang);
        $items_json = json_encode($items);
        $customer_details_json = json_encode($customer_details);

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('carts', compact('data', 'snapToken', 'items', 'customer_details', 'items_json', 'customer_details_json', 'total_items', 'id_keranjang_json'));
    }

    public function delete_cart($id_keranjang = null){
        try {
            if(!$id_keranjang){
                return redirect()->to(base_url('carts'))->with('status', 'failed');
            }

            $this->cartModel->where('id_keranjang', $id_keranjang)
                ->delete();
            
            return redirect()->to(base_url('carts'))->with('status', 'success');
        } catch (\Exception $th) {
            return redirect()->to(base_url('carts'))->with('status', 'failed');
        }
    }

    public function clear_or_update_cart(){
        try {
            $data = $this->request->getVar();

            if($data['clear_or_update_cart'] == "clear_cart"){
                for ($i=0; $i < count($data['id_keranjang']); $i++) { 
                    $this->cartModel->where('id_keranjang', $data['id_keranjang'][$i])
                        ->delete();
                }
                return redirect()->to(base_url('carts'))->with('status', 'success_clear');
            }else if($data['clear_or_update_cart'] == "update_cart"){
                for ($i=0; $i < count($data['id_keranjang']); $i++) { 
                    $this->cartModel->update($data['id_keranjang'][$i], [
                            'jumlah_beli' => $data['jumlah_beli'][$i]
                        ]);
                }
                return redirect()->to(base_url('carts'))->with('status', 'success_update');
            }
            
            
        } catch (\Exception $th) {
            return redirect()->to(base_url('carts'))->with('status', 'failed_clear');
        }
    }


}
