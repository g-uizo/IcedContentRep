<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
    public function productsPage(){
        return view('productsPage');
    }
    public function redirect(){
        return redirect()->route('site.products');
    }
}
