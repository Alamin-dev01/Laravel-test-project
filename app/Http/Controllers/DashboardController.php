<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $pageTitle="Admin Dashboard";
        return view("admin.index",compact("pageTitle"));
    }
}
