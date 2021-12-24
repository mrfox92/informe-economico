<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    use HasFactory;

    protected $table = 'egresos';

    protected $fillable = ['user_id','tipo_egreso_id', 'monto', 'fecha_egreso'];

    //  relacion 1 a muchos inversa
    public function user() {
        return $this->belongsTo(User::class);
    }

    //  relacion 1 a muchos inversa
    public function tipoEgreso() {
        return $this->belongsTo(TipoEgreso::class)->select('id','titulo');
    }
}
