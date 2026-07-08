<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::insert([
            [
                'make' => 'Toyota',
                'model' => 'Corolla',
                'year' => 2020,
                'price' => 65000,
                'mileage' => 45000,
                'location' => 'Warszawa',
                'description' => 'Świetny samochód do miasta i na trasy.',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'make' => 'BMW',
                'model' => '320d',
                'year' => 2018,
                'price' => 89000,
                'mileage' => 98000,
                'location' => 'Kraków',
                'description' => 'Dynamiczny sedan z pełnym wyposażeniem.',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'make' => 'Volkswagen',
                'model' => 'Passat',
                'year' => 2016,
                'price' => 54000,
                'mileage' => 132000,
                'location' => 'Gdańsk',
                'description' => 'Tani i wygodny samochód rodzinny.',
                'status' => 'sold',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
