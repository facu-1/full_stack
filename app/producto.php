<?php

namespace App;

use App\categoria;
use App\marca;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    public $table = 'productos';
    public $guarded = [];

    public function categoria()
    {
        return $this->belongsTo(categoria::class, 'categoria_id');
    }

    public function marca()
    {
        return $this->belongsTo(marca::class, 'marca_id');
    }
}
