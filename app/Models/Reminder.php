<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;


    protected $table = 'tbl_lembretes';
    protected $primaryKey = 'id_lembrete';

    protected $fillable = [
        'id_cliente',
        'data_lembrente',
    ];
}
