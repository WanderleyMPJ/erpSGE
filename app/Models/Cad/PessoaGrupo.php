<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class PessoaGrupo extends Model
{
    protected $fillable = ['nome', 'ativo'];

    public function pessoas()
    {
        return $this->belongsToMany(Pessoa::class);
    }
}
