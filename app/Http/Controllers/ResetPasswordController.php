<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function r_pass(){
        $pageTitle="Forgot Password";
        return view("admin.r_pass",compact("pageTitle"));
    }
}
