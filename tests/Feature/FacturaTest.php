<?php

namespace Tests\Feature;

use App\Models\Cliente;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FacturaTest extends TestCase
{
    use RefreshDatabase; 

    public function test_se_puede_registrar_una_factura()
    {
        $this->withoutExceptionHandling();

        $cliente = Cliente::create([
            'nombre'        => 'Comprador de Libros',
            'email'         => 'comprador@test.com',
            'direccion'     => 'Av. Literaria 456',
            'telefono'      => '987654321',
            'estado'        => 'Activo',
            'registradopor' => 'Admin'
        ]);

        $datos = [
            'fecha'          => now()->format('Y-m-d'),
            'cliente_id'     => $cliente->id, 
            'tipopago'       => 'Efectivo',
            'saldopendiente' => 0,
            'total'          => 1200.50,
            'estado'         => 'Completado',
            'registradopor'  => 'Sistema'
        ];

        $response = $this->post('/facturas', $datos);

        $this->assertDatabaseHas('facturas', [
            'cliente_id' => $cliente->id,
            'total'      => 1200.50
        ]);
    }
}
