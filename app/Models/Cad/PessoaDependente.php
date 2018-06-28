<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class PessoaDependente extends Model
{
    protected $fillable = ['pessoa_dependente_tipo_id', 'pessoa_id', 'pessoa_dependente_id'];

    public function PessoaDependenteTipo()
    {
        return $this->belongsTo(PessoaDependenteTipo::class);
    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function dependente()
    {
        return $this->hasMany(Pessoa::class, 'id', 'pessoa_dependente_id');
    }
}
