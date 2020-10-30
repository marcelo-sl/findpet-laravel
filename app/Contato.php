<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = ['nome', 'whatsapp'];

    public function Pet()
    {
        return $this->hasMany('App\Pet');
    }
}
