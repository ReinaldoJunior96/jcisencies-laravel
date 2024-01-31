<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;


    protected $table = 'tbl_condutor';
    protected $primaryKey = 'id_condutor';

    protected $fillable = [
        'nome_c',
        'identidade_c',
        'cpf_c',
        'orgao_expedidor_c',
        'uf_c',
        'data_nascimento_c',
        'sexo_c',
        'data_inscricao_c',
        'observacao_c'
    ];
}
