<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function payment(){
        $pageTitle="User Payment";
        return view("admin.payment",compact("pageTitle"));
    }
}
