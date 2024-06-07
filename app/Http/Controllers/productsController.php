<?php

namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class productsController extends Controller
{
    public function productsPage(){
        $products = Products::all(); 
        //dd($products);
        return view('productsPage')->with('products', $products);
    }
    public function redirect(){
        return redirect()->route('site.products');
    }

    public function formProductsPage(){
    return view('formProductsPage');
    }

    public function postProducts(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'product_image' => 'required|image|max:2048',
        ]);
        $path = $request->file('product_image')->store('public/products');

 
        $validatedData['product_image'] = Storage::url($path);

        products::create($validatedData);


        return redirect()->route('site.products')->with('sucesso', 'Produto adicionado com sucesso!');
    }

    public function deleteProducts($id){
    $product = products::findOrFail($id);
    $product->delete();

    return redirect()->route('site.products')->with('sucesso', 'Produto deletado com sucesso!');
    }
     
    public function editProducts(Request $request, $id){
$product = products::findOrFail($id);
$validatedData = $request->validate([
    'name' => 'required|string|max:100',
    'description' => 'required|string',
    'category' => 'required|string|max:255',
    'price' => 'required|numeric|min:0',
    'product_image' => 'sometimes|image|max:2048',
]);
if ($request->hasFile('product_image')) {
    // Delete a imagem antiga se existir
    if ($product->product_image) {
        $oldImagePath = str_replace('/storage', 'public', $product->product_image);
        Storage::delete($oldImagePath);
    }

    $path = $request->file('product_image')->store('public/products');
    $validatedData['product_image'] = Storage::url($path);
}

$product->update($validatedData);
return redirect()->route('site.products')->with('sucesso', 'Produto editado com sucesso!');


    }
    public function editFormProductsPage($id){
        $product = products::findOrFail($id);
        return view('editFormProductsPage')->with('product', $product);
        }    
}