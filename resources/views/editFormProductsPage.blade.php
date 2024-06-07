@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-4 items-center justify-center p-5">
    <img class="object-cover h-44 w-44 rounded-full" src="{{ asset($product->product_image) }}" alt="imagem">
        <form action="{{route("site.editProducts",$product->id)}}" method="POST" class="flex flex-col gap-4" enctype="multipart/form-data">
        @csrf 
        @method('PUT')   
        <input type="text" class="border border-3 rounded-lg p-2" value="{{$product->name}}" name="name" placeholder="Nome do sorvete">
            <input type="text" value="{{$product->description}}" name="description" class="border border-3 rounded-lg p-2" placeholder="Descrição do Produto ">
            <input type="text" value="{{$product->category}}" class="border border-3 rounded-lg p-2" name="category" placeholder="Categoria">
            <input type="number" value="{{$product->price}}" class="border border-3 rounded-lg p-2" name="price" placeholder="Preço do Produto">
            <input type="file" value="{{$product->product_image}}" class="border border-3 rounded-lg p-2" name="product_image" placeholder="Imagem do produto"/> 
            <button type="submit" class="border border-3 rounded-lg p-2 bg-main">Salvar Alterções</button>
        </form>
        
    </div>
@endsection