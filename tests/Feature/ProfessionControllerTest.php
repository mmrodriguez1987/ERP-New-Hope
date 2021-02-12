<?php

namespace Tests\Feature;

use App\Profession;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProfessionControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Sanctum::actingAs(
            factorty(User::class)->create()
        );
        factory(Profession::class, 5)->create();
    }

    public function test_index()
    {
       

        $response = $this->getJson('/api/professions');

        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
        $response->assertJsonCount(5);
    }

    public function test_create_new_Profession()
    {
        $data = ['name' => 'Engineer'];
        $response = $this->postJson('/api/professions', $data);

        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
        $this->assertDatabaseHas('Professions', $data);
    }

    public function test_update_Profession()
    {
        /** @var Profession $profession */
        $profession = factory(Profession::class)->create();

        $data = ['name' => 'Developer'];

        $response = $this->patchJson("/api/professions/{$profession->getKey()}", $data);
        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
    }

    public function test_show_Profession()
    {
        /** @var Profession $profession */
        $profession = factory(Profession::class)->create();

        $response = $this->getJson("/api/professions/{$profession->getKey()}");

        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
    }

    public function test_delete_profession()
    {
        /** @var Profession $profession */
        $profession = factory(Profession::class)->create();

        $response = $this->deleteJson("/api/professions/{$profession->getKey()}");

        $response->assertSuccessful();
        $response->assertHeader('content-type', 'application/json');
        $this->assertDeleted($profession);
    }
}
