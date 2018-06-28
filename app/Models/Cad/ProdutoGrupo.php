<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class ProdutoGrupo extends Model
{
    protected $fillable = ['nome', 'ativo'];

    public function produtos()
    {
        return $this->belongsToMany(Produto::class);
    }

}
