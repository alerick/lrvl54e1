<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);
        $user = factory(App\User::class)->create([
     'name' => 'Duilio Palacios',
]);

$this->actingAs($user, 'api');

$this->visit('/api/user')
     ->see('Duilio Palacios');
    }
}
