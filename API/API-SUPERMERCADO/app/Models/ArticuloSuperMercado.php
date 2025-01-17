<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticuloSuperMercado extends Model
{
    use HasFactory;

    protected $connection = 'mysql_supermercado';

    protected $table = 'articulos';

    public function marca(){
        return $this->belongsTo('App\Models\Marca');
    }
}
