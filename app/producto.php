<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable = [
        'subcategoria_id',
        'nombre',
        'precio',  
        'descripcion',  
        'talle',  
        'foto1',
        'foto2',
    ];

    public function subcategoria()
    {
        return $this->belongsTo(subcategoria::class);
    }
}
