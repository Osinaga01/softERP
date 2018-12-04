<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    protected $table = 'categorias';

    protected $primaryKey= 'id';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado'
    ];

    protected $guarded = [

    ];
}
