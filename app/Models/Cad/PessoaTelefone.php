<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class PessoaTelefone extends Model
{
    protected $fillable = ['descricao', 'pessoa_id', 'numero'];
    //

    public function setNumeroAttribute($value)
    {
        $this->attributes['numero'] = preg_replace("/\D+/","", $value);
    }

    public function pessoas()
    {
        return $this->belongsToMany(Pessoa::class);
    }
}
