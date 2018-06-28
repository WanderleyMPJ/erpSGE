<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['nome', 'ativo', 'movestoque', 'ean', 'tipo'];

    public function setTipoAttribute($value)
    {
        $this->attributes['tipo'] = mb_strtoupper($value);
    }

    public function produtogrupos()
    {
        return $this->belongsToMany(ProdutoGrupo::class);
    }

}


