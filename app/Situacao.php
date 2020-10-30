<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Situacao extends Model
{
    protected $table = "situacoes";
    protected $fillable = ['situacao'];

    public function Pet()
    {
        return $this->hasMany('App\Pet');
    }
}
