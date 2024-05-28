<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    public function contatoPage() {
        return view("contatoPage");
    }

    public function redirect() {
        return redirect()->route("site.contato");
}
}