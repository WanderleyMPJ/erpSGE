<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class PessoaDependenteTipo extends Model
{
    protected $fillable = ['nome'];

    public function setNomeAttribute($value)
    {
        $this->attributes['nome'] = mb_strtoupper($value);
    }

    public function pessoadependentes()
    {
        return $this->hasMany(PessoaDependente::class);
    }
}
