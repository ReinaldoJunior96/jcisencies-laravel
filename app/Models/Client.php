<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'tbl_cliente';
    protected $primaryKey = 'id_cliente';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'identidade',
        'cpf',
        'orgao_expedidor',
        'uf',
        'data_nascimento',
        'sexo',
        'data_inscricao',
        'observacao'
    ];
}
