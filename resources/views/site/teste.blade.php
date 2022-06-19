@extends('site/layouts.layout-site')
@extends('site/partials.header')
@section('conteudo')

<h1> teste pesquisa dinâmica </h1>

<div class="container">
    <div class="col-4">
        <form id="form-search">
          @csrf
            <div class="input-group mb-1 form-pokemon">
              <input class="form-control mb-1" placeholder="Search by name or id" name="search" id="search" type="text" autocomplete="off">
              <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass icon-lupa"></i> </span>
            </div>  
          </form>
          
        <div id="listagem">
          {{-- 
            @foreach ($pokemons as $pokemon)
              <p> {{ $pokemon->name }}</p>
          @endforeach --}}
        </div>
    </div>


    <button id="btn-teste"> teste </button>
</div>

@endsection

