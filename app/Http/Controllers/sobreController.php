<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sobreController extends Controller
{
    public function sobrePage(){
        return view('sobrePage');
    }
    public function redirect(){
        return redirect()->route('site.sobre');
    }
}
