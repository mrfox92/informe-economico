<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;

    protected $table = 'ingresos';

    protected $fillable = ['user_id', 'tipo_ingreso_id', 'monto', 'fecha_ingreso'];

    //  relacion 1 a muchos inversa
    public function user() {
        return $this->belongsTo(User::class);
    }

    //  relacion 1 a muchos inversa
    public function tipoIngreso() {
        return $this->belongsTo(TipoIngreso::class)->select('id','titulo');
    }
}
