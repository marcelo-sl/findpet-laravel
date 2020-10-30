<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    protected $fillable = ['especie'];

    public function Pet()
    {
        return $this->hasMany('App\Pet');
    }
}
