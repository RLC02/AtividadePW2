@extends('layout.basico')

@section('titulo', "forms")

@section('conteudo')

<div class="hero min-h-screen" style="background-image: url(https://images.freecreatives.com/wp-content/uploads/2015/03/Huge-Backgrounds-63.jpg);">
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-center text-neutral-content">
    <div class="max-w-md">
      <h1 class="mb-5 text-5xl font-bold text-[#DBE4EE]">Bem vindo!</h1>
      <p class="mb-5 text-[#DBE4EE]">"Este site foi desenvolvido como parte de um projeto da disciplina de Programação Web 2, visando oferecer uma experiência de usuário aprimorada. Valorizamos seu feedback para melhorias futuras."</p>
      <a class="btn btn-primary" href="{{ route('contato') }}">Contato</a>
    </div>
  </div>
</div>
@endsection