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

    public function postProducts(){
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'product_image' => 'required|string|max:255',
        ]);
        Produto::create($validatedData);

        return redirect()->route('site.products')->with('success', 'Produto adicionado com sucesso!');
    }
    }