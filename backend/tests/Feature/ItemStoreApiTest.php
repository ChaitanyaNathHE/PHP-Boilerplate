<?php

namespace Tests\Feature;

use App\Models\Store;
use App\Models\Item;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ItemStoreApiTest extends TestCase
{
    use RefreshDatabase;


   public function testCreateItem()
{
    $response = $this->post('/api/items', [
        'name' => 'Item 1',
        'price' => 10.99,  // Add this - price is required
    ]);

    $response->assertStatus(201)
        ->assertJson(['name' => 'Item 1']);

    $this->assertDatabaseHas('items', ['name' => 'Item 1']);
}



    public function testGetItem()
    {
        $item = Item::factory()->create();

        $response = $this->get('/api/items/' . $item->id);

        $response->assertStatus(200)
            ->assertJson(['name' => $item->name]);
    }
}
