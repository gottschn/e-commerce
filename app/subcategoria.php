<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategoria extends Model
{
    protected $fillable = [
        'categoria_id',
        'nombre',
    ];

    public function categoria()
    {
        return $this->belongsTo('App\categoria');
    }
}
