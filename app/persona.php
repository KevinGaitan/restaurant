<?php

namespace restaurant;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $table = 'persona';

    protected $primaryKey = 'id_persona';

    protected $timestaps = false;

    protected $fillable = [
    	'nombre',
    	'apellido',
    	'dirreccion',
    	'genero'
    ];
}
