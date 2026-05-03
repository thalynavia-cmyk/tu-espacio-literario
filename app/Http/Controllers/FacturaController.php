<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function store(Request $request)
    {
        // Validamos que lleguen todos los campos necesarios
        $data = $request->validate([
            'fecha'          => 'required',
            'cliente_id'     => 'required',
            'tipopago'       => 'required',
            'saldopendiente' => 'required',
            'total'          => 'required',
            'estado'         => 'required',
            'registradopor'  => 'required',
        ]);

        // Creamos la factura
        Factura::create($data);

        return redirect()->back()->with('success', 'Factura creada');
    }
}
