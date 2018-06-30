<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class PessoaEndereco extends Model
{
    protected $fillable = ['descricao', 'pessoa_id', 'logradouro', 'municipio', 'uf', 'bairro',
        'complemento', 'referencia', 'cep'];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

}
