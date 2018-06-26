<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class PessoaDoctoTipo extends Model
{
    protected $fillable = ['nome'];

    public function setNomeAttribute($value)
    {
        $this->attributes['nome'] = mb_strtoupper($value);
    }

    public function pessoadocts()
    {
        return $this->hasMany(PessoaDocto::class);
    }
}
