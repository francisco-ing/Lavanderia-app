<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio_clinico extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='servicio_clinico';
    protected $primaryKey = 'id';
    protected $fillable=['id', 'nombre', 'cantidad'];
    protected $guarded=[];
    public $timestamps=false;
}
