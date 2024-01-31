<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'tbl_endereco';
    protected $primaryKey = 'id_endereco';

    protected $fillable = [
        'cep',
        'endereco',
        'bairro',
        'numero',
        'complemento',
        'cidade',
        'uf_endereco',
        'data_inscricao',
        'id_cliente'
    ];
}
