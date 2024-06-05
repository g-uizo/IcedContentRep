@extends('layouts.app')

@section('content')
   <div class="p-5 flex flex-col gap-6 items-center justify-center">
        <p class="text-6xl text-center text-texto">Delicie-se com o melhor Sorvete Artesanal e mergulhe em uma experiência refrescante conosco!</p>
        <ion-icon name="snow" size="large"></ion-icon>
        <a href="{{ route('site.products')}}">
        <button class="py-3 px-6 bg-main rounded-lg ">Conheça nossos produtos</button>
        </a>
   </div>
@endsection