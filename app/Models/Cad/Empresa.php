<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['nome', 'ativo', 'pessoa_id'];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}
