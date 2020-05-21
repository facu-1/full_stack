<?php

namespace App;

use App\producto;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    public $table = 'categorias';
    public $guarded = [];

    public function productos()
    {
        return $this->hasMany(producto::class, 'categoria_id');
    }
}
