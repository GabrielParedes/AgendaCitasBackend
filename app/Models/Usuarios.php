<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $keyType = 'integer';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'usuario',
        'contrasena',
    ];
}
