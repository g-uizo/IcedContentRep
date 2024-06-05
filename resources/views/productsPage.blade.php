@extends('layouts.app')

@section('content')
   <section class="p-5 gap-10">
    <div class="flex flex-col gap-10">
      <p class="flex justify-center items-center text-4xl text-center text-texto">Aqui você encontra todas as nossas variedades de sorvetes e picolés! Prepare-se para se espantar com o melhor conteúdo gelado da região.</p>
      <div class="flex flex-col font-bold text-4xl">
         <h1>Nossos melhores <span class="text-main">Sorvetes</span></h1>
         <p class="text-texto text-lg font-medium">Conheça nosso renomado cardápio de sorvetes em massa.</p>
      </div>
    </div>
    <x-card-produto />

   </section>

@endsection