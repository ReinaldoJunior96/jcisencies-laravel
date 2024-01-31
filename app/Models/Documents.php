<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;

    protected $table = 'tbl_documentos';
    protected $primaryKey = 'id_doc';

    protected $fillable = [
        'titulo_doc',
        'documento',
        'id_cliente',
    ];
}
