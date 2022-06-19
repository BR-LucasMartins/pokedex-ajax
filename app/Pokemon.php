<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{   
    protected $table = 'pokemons';
    protected $fillable = ['name', 'num', 'image', 'image_icon', 'types', 'main_type', 'weight', 'hp', 'attack', 'defense', 'speed' ,'abilities'];
}
