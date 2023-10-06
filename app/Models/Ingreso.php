<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;
    protected $table='ingreso';
    protected $primaryKey = 'id';
    protected $fillable=['id', 'encargado', 'fecha', 'hora', 'cod_lote', 'cantidad'];
    protected $guarded=[];
    public $timestamps=false;
}
