<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Panier;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PanierTest extends TestCase
{
    use  RefreshDatabase;

    protected string $endpoint = '/api/paniers';
    protected string $tableName = 'paniers';

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCreatePanier(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        $payload = Panier::factory()->make([])->toArray();

        $this->json('POST', $this->endpoint, $payload)
             ->assertStatus(201)
             ->assertSee($payload['name']);

        $this->assertDatabaseHas($this->tableName, ['id' => 1]);
    }

    public function testViewAllPaniersSuccessfully(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        Panier::factory(5)->create();

        $this->json('GET', $this->endpoint)
             ->assertStatus(200)
             ->assertJsonCount(5, 'data')
             ->assertSee(Panier::find(rand(1, 5))->name);
    }

    public function testViewAllPaniersByFooFilter(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        Panier::factory(5)->create();

        $this->json('GET', $this->endpoint.'?foo=1')
             ->assertStatus(200)
             ->assertSee('foo')
             ->assertDontSee('foo');
    }

    public function testsCreatePanierValidation(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        $data = [
        ];

        $this->json('post', $this->endpoint, $data)
             ->assertStatus(422);
    }

    public function testViewPanierData(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        Panier::factory()->create();

        $this->json('GET', $this->endpoint.'/1')
             ->assertSee(Panier::first()->name)
             ->assertStatus(200);
    }

    public function testUpdatePanier(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        Panier::factory()->create();

        $payload = [
            'name' => 'Random'
        ];

        $this->json('PUT', $this->endpoint.'/1', $payload)
             ->assertStatus(200)
             ->assertSee($payload['name']);
    }

    public function testDeletePanier(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        Panier::factory()->create();

        $this->json('DELETE', $this->endpoint.'/1')
             ->assertStatus(204);

        $this->assertEquals(0, Panier::count());
    }
    public function testRestorePanier(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        Panier::factory()->create();

        $this->json('DELETE', $this->endpoint.'/1')
             ->assertStatus(204);

        $this->json('GET', $this->endpoint.'/1/restore')
             ->assertStatus(200);

        $this->assertDatabaseHas($this->tableName, [
            'id'         => 1,
            'deleted_at' => null,
        ]);
    }

    public function testPermanentPanier(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        Panier::factory()->create();

        $this->json('DELETE', $this->endpoint.'/1')
             ->assertStatus(204);

        $this->json('DELETE', $this->endpoint.'/1/permanent-delete')
             ->assertStatus(204);

        $this->assertDatabaseMissing($this->tableName, ['id' => 1]);
    }
}
