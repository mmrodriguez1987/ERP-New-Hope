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

        $profession = Profession::factory()->count(20)->create();
    }

    public function test_if_index_is_ok()
    {
        $this->get('/api/professions')
             ->assertSuccessful();
    }

    public function test_if_store_is_ok()
    {
        $data = ['name' => 'Engineer'];

        $response = $this->post('/api/professions', $data);
        $response->assertSuccessful();
        $this->assertDatabaseHas('professions', $data);
    }


    public  function test_if_profession_is_paginated()
    {
        $profession = Profession::factory()->count(80)->create();

        $this->get('/api/professions?page=1&search=&orderBy=id&desc=true')
            ->assertSuccessful();
    }

    public function test_if_profession_can_be_updated()
    {
        $profession = Profession::factory()->create();

        $fields = ['name' => 'New Profession'];

        $this->get(route('professions.update', $profession->id))->assertStatus(200);

        $this->patch(route('professions.update', $profession->id), $fields);

        $this->assertDatabaseHas('professions', ['name' => 'New Profession']);
    }

    public function test_if_profession_is_finded()
    {
        $profession = Profession::factory()->count(500)->create();
        $searched = Profession::factory()->create([
            'name' => 'Searched Profession'
        ]);

        $profession = Profession::factory()->create();

        $this->get('/api/professions?search=Searched&orderBy=id&desc=true')
             ->assertSuccessful()
             ->assertSee($searched->name)
             ->assertDontSee($profession->name);

    }

    public function test_if_profession_can_be_deleted()
    {
        $this->get(route('professions.index'))->assertStatus(200);

        $profession = Profession::factory()->create();

        $this->delete(route('professions.destroy', $profession->id))
            ->assertJson([
                'message' => trans('app.profession.delete_message')
            ]);

        $this->assertDatabaseMissing('professions', [
            'id' => $profession->id
        ]);


    }

    public function test_if_profession_is_ordered_by_any_column()
    {
        $first = Profession::factory()->create([
            'name' => 'AAAAAAAAAAAAAAAAA'
        ]);


        $professions = Profession::factory()->count(20)->create([
            'name' => 'BBBBBBBBBBBBBBBBBB'
        ]);

        $last =  Profession::factory()->create([
            'name' => 'ZZZZZZZZZZZZZZZ'
        ]);

        $this->get('/api/professions?orderBy=name&desc=false')
            ->assertSuccessful()
            ->assertSee($first->name)
            ->assertDontSee($last->name);

        $this->get('/api/professions?orderBy=name&desc=true')
            ->assertSuccessful()
            ->assertSee($last->name)
            ->assertDontSee($first->name);

        $this->get('/api/professions?orderBy=name&desc=false')
            ->assertSuccessful()
            ->assertSee($first->name)
            ->assertDontSee($last->name);

        $this->get('/api/professions?orderBy=name&desc=true')
            ->assertSuccessful()
            ->assertSee($last->name)
            ->assertDontSee($first->name);
    }
}
