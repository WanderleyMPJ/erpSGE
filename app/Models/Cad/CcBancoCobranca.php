<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class CcBancoCobranca extends Model
{
    protected $fillable = ['cc_banco_id', 'convenio', 'carteira'];

    public function ccBanco()
    {
        return $this->belongsTo(CcBanco::class);
    }
}
