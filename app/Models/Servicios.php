<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'servicios';
    protected $primaryKey = 'id_servicio';
    protected $keyType = 'integer';
    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];
}
