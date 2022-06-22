<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EstadoPagoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

      /** @test */
    public function showHomePageEstadoPago()
    {
        echo "\n EstadoPagoTest - showHomePageEstadoPago: Must return 200 Method Allowed";
        $sesionName = 'estado_pago_user';
        $user = 'asilva';
        $response = $this->withSession([$sesionName => $user]);
        $response = $this->get('/estadopagos');
        $response->assertStatus(200);
    }
}
