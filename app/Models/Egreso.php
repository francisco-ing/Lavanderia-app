<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    use HasFactory;
    protected $table='egreso';
    protected $primaryKey = 'id';
    protected $fillable=['id', 'encargado', 'fecha', 'hora', 'cantidad'];
    protected $guarded=[];
    public $timestamps=false;
}
