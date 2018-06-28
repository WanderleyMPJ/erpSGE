<?php

namespace App\Models\Mov;

use App\Models\Cad\MovNatOperacao;
use App\Models\Cad\Pessoa;
use Illuminate\Database\Eloquent\Model;

class Mov extends Model
{
    protected $fillable = ['pessoa_id', 'mov_nat_operacao_id', 'data', 'documento', 'valorbruto',
        'desconto', 'acrescimo', 'status'];

    protected $dates = ['data'];

    public function MovNatOperacao()
    {
        return $this->belongsTo(MovNatOperacao::class);
    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}
