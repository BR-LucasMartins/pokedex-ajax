<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function index(Request $request){

         $pokemons = DB::table('pokemons')->get();
         return view('site.index', ['pokemons' => $pokemons]);
    }


    public function listPokemons(Request $request){
            
            $pokemons = DB::table('pokemons')->where('name', 'like', '%'.$request->search.'%')->orWhere('num', $request->search)->get();

            if( count($pokemons) > 0){
                
                $data  = '';
                $i = 0;
                foreach ($pokemons as $pokemon){
                    if($i == 0){
                        $class = 'ativo';
                    }
                    else{
                        $class = '';
                    }
                    $data .= '<li class="pokemon text-capitalize '. $class .'" id="'.$pokemon->name.'">
                     <img src="'.$pokemon->image_icon.'" alt="icone pokemon" />
                     <h5>'.$pokemon->name.'</h5>
                     <span> #'. str_pad($pokemon->num, 3, '0', STR_PAD_LEFT).'</span>
                 </li>';

                 $i++;
                }
            }else{
                $data = "Nenhum registro encontrado";
            }  
            echo $data;
            return; 
}




public function filterTYpes(Request $request, $type){
    $pokemons = DB::table('pokemons')->where('types', 'like', '%'.$type.'%')->orWhere('num', $request->search)->get();

            if( count($pokemons) > 0){
                
                $data  = '';
                $i = 0;
                foreach ($pokemons as $pokemon){
                    if($i == 0){
                        $class = 'ativo';
                    }
                    else{
                        $class = '';
                    }
                    $data .= '<li class="pokemon text-capitalize '. $class .'" id="'.$pokemon->name.'">
                     <img src="'.$pokemon->image_icon.'" alt="icone pokemon" />
                     <h5>'.$pokemon->name.'</h5>
                     <span> #'. str_pad($pokemon->num, 3, '0', STR_PAD_LEFT).'</span>
                 </li>';

                 $i++;
                }
            }

            echo $data;
            return; 
}

}