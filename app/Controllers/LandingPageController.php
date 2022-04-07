<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FeedbackModel;

class LandingPageController extends BaseController
{
    public function __construct()
    {
        $this->feedbackModel = new FeedbackModel();
    }
    public function index()
    {
        $data = $this->feedbackModel->get()->getResult();
        return view("home", compact('data'));
    }

    public function about_us()
    {
        return view("about_us");
    }
    public function contact_us()
    {
        return view("contact_us");
    }
}

