<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'citas';
    protected $primaryKey = 'id_cita';
    protected $keyType = 'integer';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'fecha_cita',
        'hora_cita',
        'servicio',
    ];
}
