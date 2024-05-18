@extends('layout.basico')

@section('titulo', "forms")

@section('conteudo')

<div class="hero min-h-screen" style="background-image: url(https://images.freecreatives.com/wp-content/uploads/2015/03/Huge-Backgrounds-63.jpg);">
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-center text-neutral-content">
    <div class="max-w-md">
    <div class="join join-vertical">
       <form action="{{ route('contato') }}" method="post">
            @csrf
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text text-[#FFFFFF]">Nome</span>
                </div>
                <input type="text" name="nome" class="text-[#FF2D20] input input-bordered w-full max-w-xs" />
            </label>
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text text-[#FFFFFF]">Telefone</span>
                </div>
                <input type="tel" name="telefone" class="text-[#FF2D20] input input-bordered w-full max-w-xs" />
            </label>
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text text-[#FFFFFF]">Endereço</span>
                </div>
                <input type="text" name="endereco" class="text-[#FF2D20] input input-bordered w-full max-w-xs" />
            </label>
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text text-[#FFFFFF]">Sexo</span>
                </div>
                <input type="text" name="sexo" class="text-[#FF2D20] input input-bordered w-full max-w-xs" />
            </label>
            <button type="submit" class="btn btn-primary m-5">Enviar</button>
        </form>
    </div>
</div>
</div>
</div>
@endsection