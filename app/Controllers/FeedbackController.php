<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FeedbackModel;

class FeedbackController extends BaseController
{
    public function __construct()
    {
        $this->feedbackModel = new FeedbackModel();
    }
    public function add_feedback()
    {
        try {
            $data = $this->request->getVar();
            $insert = [
                'id_produk' => $data['id_produk'],
                'id_user' => $data['id_user'],
                'isi' => $data['isi'],
                'bintang' => $data['bintang']
            ];
            $this->feedbackModel->replace($insert);
            return redirect()->back()->with('status', 'success');
        } catch (\Exception  $th) {
            var_dump($th);exit;
            return redirect()->back()->with('status', 'failed');
        }
    }
}
