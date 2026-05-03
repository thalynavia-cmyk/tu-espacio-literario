<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // 1. CONSULTAR
    public function index() {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    // 2. INSERTAR (Corregido para el Test)
    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:clientes,email',
        ]);

        Cliente::create([
            'nombre'        => $request->nombre,
            'direccion'     => $request->direccion,
            'telefono'      => $request->telefono,
            'email'         => $request->correo, // Puente: correo -> email
            'estado'        => $request->estado,
            'registradopor' => $request->registradopor,
        ]);

        return redirect()->back()->with('success', 'Cliente registrado');
    }

    // 3. ACTUALIZAR
    public function update(Request $request, $id) {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->back()->with('success', 'Cliente actualizado');
    }

    // 4. ELIMINAR
    public function destroy($id) {
        Cliente::destroy($id);
        return redirect()->back()->with('success', 'Cliente eliminado');
    }
}
