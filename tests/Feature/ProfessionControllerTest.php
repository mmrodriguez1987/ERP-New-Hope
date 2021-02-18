<?php

namespace Tests\Feature;

use App\Models\Profession;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Tests\TestCase;

class ProfessionControllerTest extends TestCase
{
    use RefreshDatabase;
    protected $profession;

    protected function setUp(): void
    {
        parent::setUp();
        //Craete the user as Default for all method
        Sanctum::actingAs(
            User::factory()->create()
        );

        $profession = Profession::factory()->count(500)->create();
    }

    public function test_index()
    {
        $this->get('/api/professions')
             ->assertSuccessful();
    }

    public function test_create_new_profession()
    {
        $data = ['name' => 'Engineer'];

        $response = $this->post('/api/professions', $data);
        $response->assertSuccessful();
        $this->assertDatabaseHas('professions', $data);
    }

    /** @test */
    function if_profession_is_paginated()
    {
        $this->get('/api/profession?page=1&search=&orderBy=id&desc=true')
             ->assertSuccessful()
             ->assertSee($profession[19]->name)
             ->assertDontSee($profession[0]->name);
    }

    // public function test_update_Profession()
    // {
    //     /** @var Profession $profession */
    //     $profession = factory(Profession::class)->create();

    //     $data = ['name' => 'Developer'];

    //     $response = $this->patchJson("/api/professions/{$profession->getKey()}", $data);
    //     $response->assertSuccessful();
    //     $response->assertHeader('content-type', 'application/json');
    // }

    // public function test_show_Profession()
    // {
    //     /** @var Profession $profession */
    //     $profession = factory(Profession::class)->create();

    //     $response = $this->getJson("/api/professions/{$profession->getKey()}");

    //     $response->assertSuccessful();
    //     $response->assertHeader('content-type', 'application/json');
    // }

    // public function test_delete_profession()
    // {
    //     /** @var Profession $profession */
    //     $profession = factory(Profession::class)->create();

    //     $response = $this->deleteJson("/api/professions/{$profession->getKey()}");

    //     $response->assertSuccessful();
    //     $response->assertHeader('content-type', 'application/json');
    //     $this->assertDeleted($profession);
    // }
}
