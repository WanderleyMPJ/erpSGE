<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class FormapgParcela extends Model
{
    protected $fillable = ['dias', 'formapg_id'];

    public function Formapg()
    {
        return $this->belongsTo(Formapg::class);
    }
}
