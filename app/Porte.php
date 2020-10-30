<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Porte extends Model
{
    protected $fillable = ['porte'];

    public function Pet()
    {
        return $this->hasMany('App\Pet');
    }
}
