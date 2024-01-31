<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressConductor extends Model
{
    use HasFactory;

    protected $table = 'tbl_endereco_condutor';
    protected $primaryKey = 'idEndereco';

    protected $fillable = [
        'logradouro',
        'numero',
        'andar_sala',
        'bairro_distrito',
        'municipio',
        'uf',
        'cep',
        'id_condutor',
    ];
}
