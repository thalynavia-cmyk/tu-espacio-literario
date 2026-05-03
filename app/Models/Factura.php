<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Factura extends Model
{
    use HasFactory;

    protected $table = 'facturas';

    protected $fillable = [
       'fecha',
       'cliente_id',
       'tipopago',
       'saldopendiente',
       'total',
       'estado',
       'registradopor',
    ];

    // Relación con Cliente (muchos a uno)
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}
