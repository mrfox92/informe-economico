<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoIngreso extends Model
{
    use HasFactory;

    protected $table = 'tipo_ingresos';
    protected $fillable = ['titulo', 'descripcion'];


    //  relacion 1 a muchos
    public function ingresos() {
        return $this->hasMany(Ingreso::class);
    }
}
