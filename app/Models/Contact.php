<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'tbl_contato';
    protected $primaryKey = 'id_contato';

    protected $fillable = [
        'id_contato',
        'email',
        'residencial',
        'comercial',
        'celular',
        'whatsapp',
        'id_cliente',
    ];
}
