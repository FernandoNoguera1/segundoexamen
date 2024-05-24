<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{   
    public function producto (){
        return $this->belongsToMany('App\Models\Producto');
    }

    use HasFactory;
}
