<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductoTest extends TestCase
{
    use RefreshDatabase;

    public function test_se_puede_crear_un_producto_nuevo()
    {
        $this->withoutExceptionHandling();

        // 1. Logueamos a un usuario
        $usuario = User::factory()->create();
        $this->actingAs($usuario); 

        // 2. Preparamos los datos
        $datos = [
            'nombre'      => 'Don Quijote de la Mancha',
            'descripcion' => 'Clásico de Cervantes',
            'precio'      => 35000,
            'stock'       => 5,
            'estado'      => 'Disponible',
            // 'autor_id' => 1 // Quita el comentario si tu BD lo pide
        ];

        // 3. Enviamos la petición
        $this->post('/productos', $datos);

        // 4. Verificamos que se guardó
        $this->assertDatabaseHas('productos', [
            'nombre' => 'Don Quijote de la Mancha'
        ]);
    }
}
