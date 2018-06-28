<?php

namespace App\Models\Cad;

use App\Models\Mov\Mov;
use Illuminate\Database\Eloquent\Model;

class MovNatOperacao extends Model
{
    protected $fillable = ['nome', 'ativo', 'movfinanceiro', 'movestoque', 'tipo'];

    public function setTipoAttribute($value)
    {
        if ($value != 'E') {
            if ($value != 'S') {
                abort(404, 'Tipos aceitos: E e S');
            }
        }
        $this->attributes['tipo'] = mb_strtoupper($value);
    }

    public function mov()
    {
        return $this->hasMany(Mov::class);
    }
}
