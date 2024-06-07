@props(['product'])
<div>
    <div class="flex flex-col border border-1 p-5 rounded-lg border-bgClaro w-1/6">
    <div class="flex justify-center items-center">
    <img class="object-cover h-32 w-32 rounded-full" src="{{ asset($product->product_image) }}" alt="imagem">
    </div>
    <div class="flex gap-4 py-2">
    <form action="{{route('site.deleteProducts', $product->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button><ion-icon name="trash-outline" size="large"></ion-icon></button></form>
    <a href="{{route('site.editFormProducts', $product->id)}}"><button><ion-icon name="create-outline" size="large"></ion-icon></button> </a>
    </div>
    
    
    <div class="flex flex-col gap-6">
    
    <p class="font-bold text-2xl">{{ $product->name }}</p>
    <p class="text-md text-texto">{{ $product->description }}</p>
    <p class="font-normal text-xl">Preço: R$ {{ $product->price }}</p>
    <p class="font">{{ $product->category }}</p>
     
    </div>
    </div>
    
</div>