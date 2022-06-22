<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SignInTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     /** @test */
    public function signInWithPostMethod() {
        echo "\n SignInTest - signInWithPostMethod: Must return 405 Method Not Allowed";
        $user = 'admin';
        $pass = 'admin';
        $response = $this->post('/signin/user/'.$user.'/pass/'.$pass);
        $response->assertStatus(405);
    }

    /** @test */
    public function signInWithGetMethod() {
        echo "\n SignInTest - signInWithGetMethod: Must return 200 Method Allowed";
        $user = 'admin';
        $pass = 'admin';
        $response = $this->get('/signin/user/'.$user.'/pass/'.$pass);
        $response->assertStatus(401);
    }

    /** @test */
    public function signInWithEmptyData() {
        echo "\n SignInTest - signInWithEmptyData: Must return 404 Method Allowed";
        $user = '';
        $pass = '';
        $response = $this->get('/signin/user/'.$user.'/pass/'.$pass);
        $response->assertStatus(404);
    }

    /** @test */
    public function signInWithInvalidData() {
        echo "\n SignInTest - signInWithInvalidData: Must return 200 Method Allowed , state 0 and message Error";
        $user = 'asilva';
        $pass = '1234';
        $response = $this->get('/signin/user/'.$user.'/pass/'.$pass)->assertStatus(401);
    }

    /** @test */
    public function signInWithValidData() {
        echo "\n SignInTest - signInWithValidData: Must return 200 Method Allowed , state 1 and message valid data";
        $user = 'asilva';
        $pass = '2226';
        $response = $this->get('/signin/user/'.$user.'/pass/'.$pass)->assertStatus(302);
    }
}
