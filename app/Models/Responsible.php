<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    use HasFactory;

    protected $table = 'tbl_responsavel';
    protected $primaryKey = 'id_responsavel';

    protected $fillable = [
        'nome_r',
        'identidade_r',
        'orgao_expedidor_r',
        'uf_r',
        'cpf_r',
        'sexo_r',
        'id_cliente'
    ];
}
