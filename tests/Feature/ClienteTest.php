<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ClienteTest extends TestCase
{
    use RefreshDatabase; 

   public function test_un_cliente_se_puede_crear_en_la_bd()
{

    $datos = [
        'nombre'        => 'Cliente de Prueba',
        'correo'        => 'prueba@test.com', 
        'direccion'     => 'Calle 123',
        'telefono'      => '123456',
        'estado'        => 'Activo',
        'registradopor' => 'Admin'
    ];

    $this->post('/clientes', $datos);

    $this->assertDatabaseHas('clientes', [
        'email' => 'prueba@test.com'
    ]);
  }
      public function test_se_puede_eliminar_un_cliente()
    {
        $cliente = \App\Models\Cliente::create([
            'nombre'        => 'Cliente a Eliminar',
            'email'         => 'borrar@test.com',
            'direccion'     => 'Calle 123',
            'telefono'      => '123456',
            'estado'        => 'Activo',
            'registradopor' => 'Admin'
        ]);

        $response = $this->delete('/clientes/' . $cliente->id);

        $this->assertDatabaseMissing('clientes', [
            'id' => $cliente->id
        ]);
        
        $response->assertStatus(302); 
    }

}
