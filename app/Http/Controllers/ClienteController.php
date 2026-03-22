<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // 1. CONSULTAR (Leer todos)
    public function index() {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    // 2. INSERTAR (Guardar)
    public function store(Request $request) {
        $data = $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:clientes',
        ]);
        Cliente::create($data);
        return redirect()->back()->with('success', 'Cliente registrado');
    }

    // 3. ACTUALIZAR (Modificar)
    public function update(Request $request, $id) {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->back()->with('success', 'Cliente actualizado');
    }

    // 4. ELIMINAR (Borrar)
    public function destroy($id) {
        Cliente::destroy($id);
        return redirect()->back()->with('success', 'Cliente eliminado');
    }
}
