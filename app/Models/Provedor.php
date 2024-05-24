<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{
    public function producto(){
        return $this->hasMany('App\Models\Producto');
    }
    use HasFactory;
}
