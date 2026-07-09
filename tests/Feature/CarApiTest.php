<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Car;

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

    public function test_can_show_car(): void
    {
        $car = Car::create([
            'make' => 'Honda',
            'model' => 'Civic',
            'year' => 2018,
            'price' => 50000,
            'mileage' => 80000,
            'location' => 'Kraków',
            'description' => 'Sprawny',
            'status' => 'available',
        ]);

        $response = $this->getJson("/api/cars/{$car->id}");

        $response->assertStatus(200)
            ->assertJsonPath('data.id', $car->id)
            ->assertJsonPath('data.make', 'Honda');
    }

    public function test_can_update_car(): void
    {
        $car = Car::create([
            'make' => 'Ford',
            'model' => 'Focus',
            'year' => 2015,
            'price' => 30000,
            'mileage' => 120000,
            'location' => 'Gdańsk',
            'description' => 'Średni stan',
            'status' => 'available',
        ]);

        $payload = [
            'price' => 28000,
            'mileage' => 121000,
            'status' => 'sold',
        ];

        $response = $this->putJson("/api/cars/{$car->id}", $payload);

        $response->assertStatus(200)
            ->assertJsonPath('data.price', '28000.00')
            ->assertJsonPath('data.status', 'sold');

        $this->assertDatabaseHas('cars', [
            'id' => $car->id,
            'price' => '28000.00',
            'status' => 'sold',
        ]);
    }

    public function test_can_delete_car(): void
    {
        $car = Car::create([
            'make' => 'Mazda',
            'model' => '3',
            'year' => 2017,
            'price' => 42000,
            'mileage' => 90000,
            'location' => 'Poznań',
            'description' => 'Dobrze utrzymany',
            'status' => 'available',
        ]);

        $response = $this->deleteJson("/api/cars/{$car->id}");

        $response->assertStatus(204);

        $this->assertDatabaseMissing('cars', [
            'id' => $car->id,
        ]);
    }
}
