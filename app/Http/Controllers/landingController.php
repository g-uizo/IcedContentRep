<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingController extends Controller
{
    public function landingPage () {
        return view("landingPage");
    }
    public function redirect(){
        return redirect()->route('site.landing');
    }
}
