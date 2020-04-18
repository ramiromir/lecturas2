<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suministro extends Model
{
    //
    protected $fillable = ['nus','nombre','seriemedidor','municipio',
        'area','direccion','categoria','lecturaprevista','kwhpromedio',
        'kwhmesanterior','lecturaanterior','multiplicador','xlongitud',
        'ylatitud','cuenta','lecturaprevsivoltea'];
}
