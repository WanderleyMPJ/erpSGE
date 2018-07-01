<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;

class Planoconta extends Model
{
    protected $fillable = ['nome', 'ativo', 'codigo', 'parent_id'];
}
