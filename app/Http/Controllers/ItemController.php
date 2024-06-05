<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function items(){
        $pageTitle="Items";
        return view("admin.items",compact("pageTitle"));
    }
}
