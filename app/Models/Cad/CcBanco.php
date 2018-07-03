<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class CcBanco extends Model
{
    protected $fillable = ['cc_id', 'numero', 'agencia', 'conta'];

    public function Cc()
    {
        return $this->belongsTo(Cc::class);
    }
}
