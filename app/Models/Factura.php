<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'productos';

protected $fillable = [
    'fecha',
    'cliente_id',
    'tipopago',
    'saldopendiente',
    'total',
    'estado',
    'registradopor',
];
//relación con Cliente (muchos a uno)
public function cliente()
(
    return $this->belongsTo(Cliente::class);
)
}
