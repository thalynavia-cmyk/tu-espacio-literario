<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $fillable = [
       'nombre',
       'direccion',
       'telefono',
       'email',
       'estado',
       'registradopor',
    ];
    //relación con Factura (uno a muchos)
    public function facturas()
    {
        return $this->hasMany(Factura::class, 'cliente_id');
    }
}
