<?php

namespace App;

use App\producto;

use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    public $table = 'marcas';
    public $guarded = [];

    public function productos()
    {
        return $this->hasMany(producto::class, 'marca_id');
    }
}
