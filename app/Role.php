<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $table = 'roles';
    public $guarded = [];

    public function usuarios()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
