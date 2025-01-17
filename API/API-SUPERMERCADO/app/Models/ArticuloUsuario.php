<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticuloUsuario extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $table = 'articulos';

    protected $fillable = [
        'cantidad',
        'nombre',
        'precio',
        'marca',
        'categoria',
    ];

    public function marca(){
        return $this->belongsTo('App\Models\Marca');
    }
}
