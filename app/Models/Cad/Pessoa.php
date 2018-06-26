<?php

namespace App\Models\Cad;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['nome', 'ativo', 'fantasia', 'user_id', 'tipo'];

    public function pessoagrupos()
    {
        return $this->belongsToMany(PessoaGrupo::class);
    }

    public function pessoadocts()
    {
        return $this->hasMany(PessoaDocto::class);
    }

    public function pessoatelefones()
    {
        return $this->hasMany(PessoaTelefone::class);
    }
}
