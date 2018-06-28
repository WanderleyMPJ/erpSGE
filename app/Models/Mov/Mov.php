<?php

namespace App\Models\Mov;

use App\Models\Cad\MovNatOperacao;
use Illuminate\Database\Eloquent\Model;

class Mov extends Model
{
    protected $fillable = ['pessoa_id', 'mov_nat_operacao_id', 'data', 'documento', 'ValorBruto',
        'Desconto', 'Acrescimo'];

    public function movnatoperacao()
    {
        return $this->belongsTo(MovNatOperacao::class);
    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}
