<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\Profession;

class ProfessionTest extends TestCase
{
    use RefreshDatabase;
    
    protected $user;

    public function setUp() {
        parrent::setUp();
        $this->user = factory(User::class)->create();
        $this->actingAs($this->user);    
    }
   
    /**
     * Check if the API can write the Profession
     */
    function if_profession_can_be_stored() {
        $response = $this->post('/api/profession', ['name' => 'Teacher'])
            ->assertSuccessful()
            ->assertJson(['message' => trans('Profession can be stored')]);

        $this->assertDatabaseHas('profession',['name' => 'Teacher']);
    }
   
}
