<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suminresumen extends Model {

    //
    protected $table = 'suministros';
    protected $fillable = ['nus', 'nombre', 'seriemedidor',
        'area', 'direccion', 'categoria', 'xlongitud',
        'ylatitud', 'cuenta'];

    public function telefonos() {
        return $this->hasMany(Telefono::class, 'nus', 'nus');
    }

}
