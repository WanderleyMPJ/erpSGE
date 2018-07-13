<?php

namespace App\Models\Mov;

use App\Models\Cad\Formapg;
use App\Models\Cad\MovNatOperacao;
use App\Models\Cad\Pessoa;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Mov extends Model
{
    protected $fillable = ['pessoa_id', 'formapg_id', 'mov_nat_operacao_id', 'data', 'documento', 'valorbruto',
        'desconto', 'acrescimo', 'status'];

    protected $dates = ['data', 'created_at', 'updated_at'];

    public function setDataAttribute($value)
    {
        $this->attributes['data'] = Carbon::createFromFormat('d/m/Y', $value);
    }

    public function MovNatOperacao()
    {
        return $this->belongsTo(MovNatOperacao::class);
    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function formapg()
    {
        return $this->belongsTo(Formapg::class);
    }

}
