@extends('layouts.app')

@section('content')
   <div class="flex flex-col items-center justify-center gap-4 p-5">
   <h1 ><ion-icon name="location-outline"></ion-icon>Indaiatuba, SP</h1>
   <p class="text-2xl text-justify">Na Iced Content, preparamos os sorvetes que desejamos encontrar, para que cada visita seja uma celebração do paladar.</p>
   <h1 class="flex text-2xl font-bold w-full items-center justify-center">Iced Team</h1>  
   <div class="flex items-center justify-center gap-5 w-full">
   
   <div class="flex gap-4">
   <div class="flex flex-col items-end justify-center">
   <p class="font-bold text-4xl">João <span class="text-main">Siqueira</span></p>
   <p class="">Design e Front End</p>
   </div>
   <div class="">
      <img class="rounded-full h-28 w-28" src="{{ asset('landingMain.png')}}" alt="">
   </div>
   </div>
   <ion-icon name="snow" size="large"></ion-icon>
   <div class="flex gap-4">
   
   <div class="">
      <img class="rounded-full h-28 w-28" src="{{ asset('landingMain.png')}}" alt="">
   </div>
   <div class="flex flex-col items-end justify-center">
   <p class="font-bold text-4xl">Guilherme <span class="text-main">Oliveira</span></p>
   <p class="">Back End</p>
   </div>
   </div>
   </div>
   <h1 class="flex text-2xl font-bold w-full items-center justify-center">Nossa História</h1> 
   <p class="text-xl w-[850px] text-justify text-texto">Na IcedContent, nossa jornada começou com uma simples paixão: o amor pelo sorvete. Tudo começou em uma pequena cozinha caseira, onde experimentações e sonhos se misturavam em deliciosas criações geladas. Inspirados pela busca pela perfeição e pelo desejo de compartilhar nossa paixão com o mundo, decidimos dar vida ao que mais tarde se tornaria uma das sorveterias mais amadas da região.</p>
   </div>
   @endsection