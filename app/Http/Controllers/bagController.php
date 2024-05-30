<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagController extends Controller
{
    public function bagPage(){
        $bagItens = Bag::where('user_id',auth()->user()->id);
        return view('bag')->with('itens', $bagItens);
    }
    public function createBag($id){
        $bag = Bag::create(['products_id'=> $id,'user_id'=>auth()->user()->id]);
    } 
    public function deleteBag($id){
        $bagItem = Bag::findorfail($id);
        $bagItem->delete();
    }
}