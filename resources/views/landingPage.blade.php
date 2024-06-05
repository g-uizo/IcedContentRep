@extends('layouts.app')

@section('content')
   <div class="flex flex-col gap-6 items-center justify-between">
        <p class="text-6xl text-center text-texto">Delicie-se com o melhor Sorvete Artesanal e mergulhe em uma experiência refrescante conosco!</p>
        <ion-icon name="snow" size="large"></ion-icon>
        <a href="{{ route('site.products')}}">
        <button class="py-3 px-6 bg-main rounded-lg ">Conheça nossos produtos</button>
        </a>
    
       <div class="bg-bgClaro rounded-lg items-center justify-center gap-4 ">
   
          
       <div class="w-[800px] h-[399px] flex flex-row gap-5">
       <div class="">
       <img class="h-[330px] " src="{{ asset('landingMain.png')}}" alt="Imagem">
       </div>
            
        
            <div class="flex flex-col justify-between gap-a">
           <p class="text-2xl text-texto">Nossa vem elevando o padrão de qualidade  mercado de sorvetes desde 2013. Sempre buscando uma harmonia entre sabor e leveza. O cuidado e a dedicação que temos são os principais motivos do nosso sucesso internacional</p> 
           <button class="py-3 px-6 bg-main rounded-lg">Conheça mais sobre</button> 
        </div>
       </div>
        
        
       
         
          
        </div>
       
   </div>
@endsection