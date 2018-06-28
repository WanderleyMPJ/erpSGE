<?php

namespace App\Models\Cad;


use Illuminate\Database\Eloquent\Model;

class PessoaDocto extends Model
{
    protected $fillable = ['numero', 'orgaoemissor', 'dataemissao', 'datavencimento',
            'pessoa_docto_tipo_id', 'pessoa_id'];

    public function PessoaDoctoTipo()
    {
        return $this->belongsTo(PessoaDoctoTipo::class);
    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

}
