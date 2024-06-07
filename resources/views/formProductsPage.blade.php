@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center p-5">
        <form action="{{route("site.postProducts")}}" method="POST" class="flex flex-col gap-4" enctype="multipart/form-data">
        @csrf 
        @method('POST')   
        <input type="text" class="border border-3 rounded-lg p-2" name="name" placeholder="Nome do sorvete">
            <input type="text" name="description" class="border border-3 rounded-lg p-2" placeholder="Descrição do Produto ">
            <input type="text" class="border border-3 rounded-lg p-2" name="category" placeholder="Categoria">
            <input type="number" class="border border-3 rounded-lg p-2" name="price" placeholder="Preço do Produto">
            <input type="file" class="border border-3 rounded-lg p-2" name="product_image" placeholder="Imagem do produto"/> 
            <button type="submit" class="border border-3 rounded-lg p-2 bg-main">Criar Produto</button>
        </form>
    </div>
@endsection