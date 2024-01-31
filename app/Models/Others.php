<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Others extends Model
{
    use HasFactory;

    protected $table = 'tbl_outros';
    protected $primaryKey = 'id_outros';

    protected $fillable = [
        'parceiro',
        'outro_meio',
        'pcd',
        'id_cliente',
    ];
}
