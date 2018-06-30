<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class PessoaEmail extends Model
{
    protected $fillable = ['descricao', 'pessoa_id', 'email'];

    public function pessoa()
    {
        return $this->belongsToMany(Pessoa::class);
    }
}
