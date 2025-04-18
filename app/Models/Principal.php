<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principal extends Model

{
    use HasFactory;
    protected $table = 'principais';
    protected $fillable=[
    'foto',
    'nome', 
    'cargo_atual',
    'titulo_academico',  
    'idioma',
    'formacao',
    'instituicao',
    'experiencia', 
    'grau',
    'areas',
    'sobre',
    
    ];
}
