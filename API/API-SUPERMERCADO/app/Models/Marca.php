<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $connection = 'mysql_supermercado';

    protected $table = 'marcas';


    public function marcas(){
        return $this->belongsTo('App\Models\Categoria');
    }

    public function articulos(){
        return $this->hasMany('App\Models\Articulo');
    }


}
