<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AutoresTest extends TestCase
{
    use RefreshDatabase;

    public function test_la_lista_de_autores_carga_bien()
    {
        // Cambia '/autores' por la URL que usas en tu navegador
        $response = $this->get('/autores'); 

        $response->assertStatus(200);
    }
}
