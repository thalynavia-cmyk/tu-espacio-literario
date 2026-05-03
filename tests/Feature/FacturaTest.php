<?php

namespace Tests\Feature;

use App\Models\Cliente;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FacturaTest extends TestCase
{
    use RefreshDatabase; // <--- Tu escudo para usar la RAM

    public function test_se_puede_registrar_una_factura()
    {
        $this->withoutExceptionHandling();

        // 1. Creamos un cliente primero porque la factura lo necesita
        $cliente = Cliente::create([
            'nombre'        => 'Comprador de Libros',
            'email'         => 'comprador@test.com',
            'direccion'     => 'Av. Literaria 456',
            'telefono'      => '987654321',
            'estado'        => 'Activo',
            'registradopor' => 'Admin'
        ]);

        // 2. Datos de la factura
        $datos = [
            'fecha'          => now()->format('Y-m-d'),
            'cliente_id'     => $cliente->id, // <--- Conexión con el cliente
            'tipopago'       => 'Efectivo',
            'saldopendiente' => 0,
            'total'          => 1200.50,
            'estado'         => 'Completado',
            'registradopor'  => 'Sistema'
        ];

        // 3. Ejecutamos la petición
        $response = $this->post('/facturas', $datos);

        // 4. Verificamos que exista en la BD de pruebas
        $this->assertDatabaseHas('facturas', [
            'cliente_id' => $cliente->id,
            'total'      => 1200.50
        ]);
    }
}
