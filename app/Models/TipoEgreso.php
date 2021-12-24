<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEgreso extends Model
{
    use HasFactory;

    protected $table = 'tipo_egresos';
    protected $fillable = ['titulo', 'descripcion'];

    //  relacion 1 a muchos
    public function egresos() {
        return $this->hasMany(Egreso::class);
    }
}
