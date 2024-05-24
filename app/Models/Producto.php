<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function provedor (){
        return $this->belongsTo('App\Models\Provedor');
    }

    public function cliente (){
        return $this->belongsToMany('App\Models\Cliente');
    }
    use HasFactory;
}
