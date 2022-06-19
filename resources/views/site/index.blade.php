@extends('site/layouts.layout-site')
@extends('site/partials.header')
@section('conteudo')

<div class="container pokedex-content">
    <div class="row">
      <div class="col-3 list-types">
        <div class="text-white mb-4">
            <h2> Filter </h2>
        </div>
        <ul class="p-0">

          {{-- All of pokemons --}}
          <li class="link-type" id="btn-all">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/icons/pokeball.svg')}}" alt="type water">
              <span> All </span>
            </div>
          </li>

        {{-- pokemons type water --}}
          <form id="form-water">
            @csrf
            <input type="hidden" id="water" name="water" value="water">
          <li class="link-type" id="btn-water">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/water.gif')}}" alt="type water">
              <span> Water </span>
            </div>
          </li>
        </form>

         {{-- pokemons type fire --}}
         <form id="form-fire">
          @csrf
          <input type="hidden" id="fire" name="fire" value="fire">
          <li class="link-type" id="btn-fire">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/fire.gif')}}" alt="type fire">
              <span> Fire </span>
            </div>
          </li>
         </form>

         {{-- pokemons type grass --}}
         <form id="form-grass">
          @csrf
          <input type="hidden" id="grass" name="grass" value="grass">
          <li class="link-type" id="btn-grass">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/grass.gif')}}" alt="type grass">
              <span> Grass </span>
            </div>
          </li>
         </form>

         {{-- pokemons type ground --}}
         <form id="form-ground">
          @csrf
          <input type="hidden" id="ground" name="ground" value="ground">
          <li class="link-type" id="btn-ground">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/ground.gif')}}" alt="type ground">
              <span> Ground </span>
            </div>
          </li>
         </form>

         {{-- pokemons type rock --}}
         <form id="form-rock">
          @csrf
          <input type="hidden" id="rock" name="rock" value="rock">
          <li class="link-type" id="btn-rock">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/rock.gif')}}" alt="type rock">
              <span> Rock </span>
            </div>
          </li>
         </form>

         {{-- pokemons type steel --}}
         <form id="form-steel">
          @csrf
          <input type="hidden" id="steel" name="steel" value="steel">
          <li class="link-type" id="btn-steel">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/steel.gif')}}" alt="type steel">
              <span> Steel </span>
            </div>
          </li>
         </form>

         {{-- pokemons type ice --}}
         <form id="form-ice">
          @csrf
          <input type="hidden" id="ice" name="ice" value="ice">
          <li class="link-type" id="btn-ice">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/ice.gif')}}" alt="type ice">
              <span> Ice </span>
            </div>
          </li>
         </form>
        
         {{-- pokemons type electric --}}
         <form id="form-electric">
          @csrf
          <input type="hidden" id="electric" name="electric" value="electric">
          <li class="link-type" id="btn-electric">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/electric.gif')}}" alt="type electric">
              <span> Electric </span>
            </div>
          </li>
         </form>

         {{-- pokemons type dragon --}}
         <form id="form-dragon">
          @csrf
          <input type="hidden" id="dragon" name="dragon" value="dragon">
          <li class="link-type" id="btn-dragon">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/dragon.gif')}}" alt="type dragon">
              <span> Dragon </span>
            </div>
          </li>
         </form>

         {{-- pokemons type ghost --}}
         <form id="form-ghost">
          @csrf
          <input type="hidden" id="ghost" name="ghost" value="ghost">
          <li class="link-type" id="btn-ghost">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/ghost.gif')}}" alt="type ghost">
              <span> Ghost </span>
            </div>
          </li>
         </form>

         {{-- pokemons type psychic --}}
         <form id="form-psychic">
          @csrf
          <input type="hidden" id="psychic" name="psychic" value="psychic">
          <li class="link-type" id="btn-psychic">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/psychic.gif')}}" alt="type psychic">
              <span> Psychic </span>
            </div>
          </li>
         </form>

         {{-- pokemons type normal --}}
         <form id="form-normal">
          @csrf
          <input type="hidden" id="normal" name="normal" value="normal">
          <li class="link-type" id="btn-normal">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/normal.gif')}}" alt="type normal">
              <span> Normal </span>
            </div>
          </li>
         </form>

         {{-- pokemons type fighting --}}
         <form id="form-fighting">
          @csrf
          <input type="hidden" id="fighting" name="fighting" value="fighting">
          <li class="link-type" id="btn-fighting">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/fighting.gif')}}" alt="type fighting">
              <span> Fighting </span>
            </div>
          </li>
         </form>

         {{-- pokemons type poison --}}
         <form id="form-poison">
          @csrf
          <input type="hidden" id="poison" name="poison" value="poison">
          <li class="link-type" id="btn-poison">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/poison.gif')}}" alt="type poison">
              <span> Poison </span>
            </div>
          </li>
         </form>

          {{-- pokemons type bug --}}
          <form id="form-bug">
            @csrf
            <input type="hidden" id="bug" name="bug" value="bug">
          <li class="link-type" id="btn-bug">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/bug.gif')}}" alt="type bug">
              <span> Bug </span>
            </div>
          </li>
          </form>

        {{-- pokemons type flying --}}
         <form id="form-flying">
          @csrf
          <input type="hidden" id="flying" name="flying" value="flying">
          <li class="link-type" id="btn-flying">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/flying.gif')}}" alt="type flying">
              <span> Flying </span>
            </div>
          </li>
         </form>

         {{-- pokemons type dark --}}
         <form id="form-dark">
          @csrf
          <input type="hidden" id="dark" name="dark" value="dark">
          <li class="link-type" id="btn-dark">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/dark.gif')}}" alt="type dark">
              <span> Dark </span>
            </div>
          </li>
         </form>

         {{-- pokemons type fairy --}}
         <form id="form-fairy">
          @csrf
          <input type="hidden" id="fairy" name="fairy" value="fairy">
          <li class="link-type" id="btn-fairy">
            <div class="d-flex align-items-center content-type p-1 mb-2">
              <img src="{{asset('assets/images/types/fairy.gif')}}" alt="type fairy">
              <span> Fairy </span>
            </div>
          </li>
         </form>

        </ul>
      </div>
      <div class="col-4 offset-1">
        <div class="cartoes-pokemon">
          @foreach ($pokemons as $pokemon)
              @php
                $types = explode(',', $pokemon->types);
                $skills = explode(',', $pokemon->abilities);
              @endphp
          <div class="cartao-pokemon tipo-{{$pokemon->main_type}} @if ($pokemon->num == 1) aberto @endif" id="cartao-{{$pokemon->name}}">
            <div class="cartao-topo">
              <div class="detalhes">
                <h2 class="nome text-capitalize">{{$pokemon->name}}</h2>
                <span>#{{str_pad($pokemon->num, 3, '0', STR_PAD_LEFT)}}</span>
              </div>
              
              @for ($i = 0;  $i < count($types); $i++)
                <span class="tipo m-1"> {{$types[$i]}} </span>
              @endfor
             
              <div class="cartao-imagem">
                <img class="w-100" src="{{$pokemon->image}}" alt="{{$pokemon->image}}" />
              </div>
            </div>
      
            <div class="cartao-informacoes">
              <div class="status">
                <h3>Status</h3>
      
                <ul>
                  <li>HP: {{$pokemon->hp}}</li>
                  <li>Attack: {{$pokemon->attack}}</li>
                  <li>Defense: {{$pokemon->defense}}</li>
                  <li>Speed: {{$pokemon->speed}}</li>
                  <li>Total: {{$pokemon->hp + $pokemon->attack + $pokemon->defense + $pokemon->speed}}</li>
                </ul>
              </div>
      
              <div class="habilidades">
                <h3>skills</h3>
                <ul>
                  
                  @for ($i = 0;  $i < count($skills); $i++)
                     <li> {{$skills[$i]}} </li> 
                  @endfor
                </ul>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-4">
        <div>
          <form id="form-search">
            @csrf
            <div class="input-group mb-1 form-pokemon">
              <input class="form-control mb-1" placeholder="Search by name or id" id="search" name="search" type="text" autocomplete="off">
              <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass icon-lupa"></i> </span>
            </div>  
          </form>
        </div>
        <nav class="listagem pokemon-list">
          <ul class="lista-pokemon" id="pokemon-list-names">
            
          </ul>
        </nav>
      </div>
    </div>
</div>

@endsection