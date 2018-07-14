<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{

    public function loginUser()
    {
        $user = factory(User::class)->create();

        Auth::login($user, true);

        return Auth::user();
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHttp()
    {

        $response = $this->get('/register');

        $response->assertStatus(200);
    }

}
