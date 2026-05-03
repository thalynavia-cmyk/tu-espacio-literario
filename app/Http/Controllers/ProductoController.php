<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function store(Request $request) 
    {
        $data = $request->validate([
            'nombre'      => 'required',
            'descripcion' => 'nullable',
            'precio'      => 'required|numeric',
            'stock'       => 'required|integer',
            'estado'      => 'required',
        ]);

        Producto::create($data);

        return redirect()->back()->with('success', 'Producto creado'); 
    }
} // <--- Esta llave es la que faltaba para cerrar la clase
