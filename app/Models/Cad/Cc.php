<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class Cc extends Model
{
    protected $fillable = ['nome', 'cc_tipo_id', 'empresa_id'];

    public function CcTipo()
    {
        return $this->belongsTo(CcTipo::class);
    }

    public function Empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

}
