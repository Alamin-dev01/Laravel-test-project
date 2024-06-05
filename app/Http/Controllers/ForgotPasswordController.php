<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function f_pass(){
        $pageTitle="Forgot Password";
        return view("admin.f_pass",compact("pageTitle"));
    }
}
