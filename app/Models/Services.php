<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $table = 'tbl_servicos';
    protected $primaryKey = 'id_servicos';

    protected $fillable = [
        'residencial_c',
        'comercial_c',
        'celular_c',
        'whatsapp_c',
        'id_condutor',
    ];
}
