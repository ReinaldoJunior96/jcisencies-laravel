<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsConductor extends Model
{
    use HasFactory;


    protected $table = 'tbl_condutor_contato';
    protected $primaryKey = 'id_contato_c';

    protected $fillable = [
        'residencial_c',
        'comercial_c',
        'celular_c',
        'whatsapp_c',
        'id_condutor',
    ];
}
