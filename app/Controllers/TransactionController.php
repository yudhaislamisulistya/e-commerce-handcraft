<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CartModel;
use App\Models\PurchaseModel;
use App\Models\TransactionModel;
use CodeIgniter\API\ResponseTrait;

class TransactionController extends BaseController
{
    use ResponseTrait;

    public function __construct()
    {
        $this->transactionModel = new TransactionModel();
        $this->purchaseModel = new PurchaseModel();
        $this->cartModel =new CartModel();
    }
    
    public function create_transaction(){


        try {
            $data = $this->request->getVar();
            
            if($data->transaction_status == "settlement"){
                $transaction = array(
                    "id_user" => get_id_user(),
                    "status_code"=> $data->status_code,
                    "transaction_id"=> $data->transaction_id,
                    "order_id"=> $data->order_id,
                    "gross_amount"=> (int)$data->gross_amount,
                    "payment_type"=> $data->payment_type,
                    "transaction_time"=> $data->transaction_time,
                    "transaction_status"=> $data->transaction_status,
                );
            }else if($data->transaction_status == "pending"){
                $transaction = array(
                    "id_user" => get_id_user(),
                    "status_code"=> $data->status_code,
                    "transaction_id"=> $data->transaction_id,
                    "order_id"=> $data->order_id,
                    "gross_amount"=> (int)$data->gross_amount,
                    "payment_type"=> $data->payment_type,
                    "transaction_time"=> $data->transaction_time,
                    "transaction_status"=> $data->transaction_status,
                );
                if($data->payment_type == "bank_transfer"){
                    $transaction['bank'] = $data->va_numbers[0]->bank;
                    $transaction['va_number'] = $data->va_numbers[0]->va_number;
                    $transaction['pdf_url'] = $data->pdf_url;
                }
            }else{
                return $this->fail([
                    "status" => "Gagal",
                ]);
            }

            $this->transactionModel->insert($transaction);


            for ($i=0; $i < $data->total_items; $i++) {
                $this->purchaseModel->insert([
                    'id_produk' => (int)$data->items[$i]->id,
                    'transaction_id'=> $data->transaction_id,
                    'jumlah_beli' => (int)$data->items[$i]->quantity,
                ]);
            }

            for ($i=0; $i < $data->total_items; $i++) {
                $this->cartModel->update($data->id_keranjang[$i]->id_keranjang, [
                    'status' => 2,
                ]);
            }

            return $this->respond([
                'code' => 200,
                'status' => "Transaksi Berhasil Diproses...",
                'queryTransaction' => true,
                'queryPurchase' => true,
                'queryCart' => true
            ]);
        } catch (\Exception $th) {
            return $this->fail([
                "status" => "Gagal",
            ]);
        }
    }


    public function check_transaction_status($id_transaksi, $order_id){
        try {
            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = 'SB-Mid-server-bniHSwdnbrw5QeP0-qD_7-jS';
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            $status = \Midtrans\Transaction::status($order_id);
            
            $this->transactionModel
                ->update($id_transaksi, [
                    'transaction_status' => $status->transaction_status
                ]);
            
            return $this->respond([
                'code' => 200,
                'data' => $status,
                'status' => "success",
                'queryTransaction' => true,
            ]);
        } catch (\Exception  $th) {
            return $this->fail('failed');
        }
    }

    public function invoices($transaction_id){
        $data = $this->transactionModel->getInvoices($transaction_id)->getResult();
        return view('invoice', compact('data'));
    }
}
