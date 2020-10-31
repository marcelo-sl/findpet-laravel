<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = ['raca', 'sexo', 'descricao', 'especie_id', 'situacao_id', 'contato_id', 'porte_id', 'imagem'];

    public function especie()
    {
        return $this->belongsTo('App\Especie', 'especie_id');
    }

    public function situacao()
    {
        return $this->belongsTo('App\Situacao', 'situacao_id');
    }

    public function contato()
    {
        return $this->belongsTo('App\Contato', 'contato_id');
    }

    public function porte()
    {
        return $this->belongsTo('App\Porte', 'porte_id');
    }
}
