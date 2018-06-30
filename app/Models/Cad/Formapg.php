<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class Formapg extends Model
{
    protected $fillable = ['nome', 'ativo', 'formapg_tipo_id'];

    public function FormapgTipo()
    {
        return $this->belongsTo(FormapgTipo::class);
    }

    public function FormapgParcela()
    {
        return $this->hasMany(FormapgParcela::class);
    }

}
