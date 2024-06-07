@extends('layouts.app')

@section('content')
<div class="p-5">
   <h1 class="text-2xl font-bold py-5">Fale conosco</h1>
   <form action="" class="flex flex-col gap-4">
      <input class="border border-3 rounded-lg p-2" type="text" placeholder="Insira seu nome">
      <input class="border border-3 rounded-lg p-2" type="email" placeholder="Insira seu email">
      <input class="border border-3 rounded-lg p-2" type="text" type="text" placeholder="Assunto">
      <input class="border border-3 rounded-lg p-2" type="text" placeholder="Escreva uma mensagem">
      <button type="submit" class="flex items-center justify-center py-3 rounded-lg bg-main">Enviar mensagem</button>
   </form>
</div>
   @endsection