<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CurrentDateTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /** @test */
    public function getCurrentDay()
    {
        echo " \n CurrentDaTest - getCurrentDay: Must return 200 and current day";
        $currentDate = getdate();
        $response = $this->getJson('/currentdate')->assertStatus(200)->decodeResponseJson();
        $this->assertTrue(is_array($response));
        $this->assertEquals($currentDate, $response);
        /* $this->assertEquals(0, $response['estado']); */


    }
}
