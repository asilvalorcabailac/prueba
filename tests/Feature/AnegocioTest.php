<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnegocioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     /** @test */
     public function getAnegocioByUserIdWithoutSession(){
        echo "\n AnegocioTest - getAnegocioByUserIdWithoutSession: Must return 401";
        $response = $this->get('/getanegociobyuser');
        $response->assertStatus(401);
    }

    /** @test */
    public function getAnegocioByUserIdWithInvalidData(){
        echo "\n AnegocioTest - getAnegocioByUserIdWithInvalidData: Must return 200";
        $sesionName = 'estado_pago_user';
        $sesionNameUserId = 'estado_pago_id_user';
        $user = 'asilva';
        $userId = '600';
        $response = $this->withSession([$sesionName => $user,
                                        $sesionNameUserId => $userId
                                    ]);


        $response = $this->get('/getanegociobyuser')->assertStatus(200)->decodeResponseJson();
        $this->assertTrue(is_array($response));
        $this->assertEquals(array(), $response);

    }
     /** @test */
    public function getAnegocioByUserIdWithValidData(){
        echo "\n AnegocioTest - getAnegocioByUserIdWithValidData: Must return 200";
        $sesionName = 'estado_pago_user';
        $sesionNameUserId = 'estado_pago_id_user';
        $user = 'asilva';
        $userId = '95';
        $response = $this->withSession([$sesionName => $user,
                                        $sesionNameUserId => $userId
                                    ]);
        $response = $this->get('/getanegociobyuser')->assertStatus(200)->decodeResponseJson();
        $this->assertTrue(is_array($response));
        $this->assertTrue(count($response)>0);

    }
}
