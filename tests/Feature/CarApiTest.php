<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CarApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_list_cars(): void
    {
        $response = $this->getJson('/api/cars');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'id',
                        'make',
                        'model',
                        'year',
                        'price',
                        'mileage',
                        'location',
                        'description',
                        'status',
                        'created_at',
                        'updated_at',
                    ],
                ],
            ]);
    }

    public function test_can_create_car(): void
    {
        $payload = [
            'make' => 'Toyota',
            'model' => 'Corolla',
            'year' => 2020,
            'price' => 65000,
            'mileage' => 45000,
            'location' => 'Warszawa',
            'description' => 'Dobry stan',
            'status' => 'available',
        ];

        $response = $this->postJson('/api/cars', $payload);

        $response->assertStatus(201)
            ->assertJsonPath('data.make', 'Toyota')
            ->assertJsonPath('data.model', 'Corolla');

        $this->assertDatabaseHas('cars', [
            'make' => 'Toyota',
            'model' => 'Corolla',
        ]);
    }
}
