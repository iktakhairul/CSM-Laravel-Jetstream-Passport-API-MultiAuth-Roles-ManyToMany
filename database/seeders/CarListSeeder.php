<?php

namespace Database\Seeders;

use App\Models\CarList;
use Illuminate\Database\Seeder;

class CarListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        CarList::create(['car_brand' => 'Toyota', 'car_model' => 'Toyota Corolla',]);
        CarList::create(['car_brand' => 'Toyota', 'car_model' => 'Toyota Avalon',]);
        CarList::create(['car_brand' => 'Toyota', 'car_model' => 'Toyota Camry',]);
        CarList::create(['car_brand' => 'Toyota', 'car_model' => 'Toyota Prius',]);
        CarList::create(['car_brand' => 'Toyota', 'car_model' => 'Toyota 86',]);
        CarList::create(['car_brand' => 'Toyota', 'car_model' => 'Toyota RAV4',]);
        CarList::create(['car_brand' => 'Mercedes', 'car_model' => 'Mercedes-Benz A',]);
        CarList::create(['car_brand' => 'Mercedes', 'car_model' => 'Mercedes-Benz A-Class-sedan',]);
        CarList::create(['car_brand' => 'Mercedes', 'car_model' => 'Mercedes-Benz CLS-Class',]);
        CarList::create(['car_brand' => 'Mercedes', 'car_model' => 'Mercedes-Benz AMG-GT',]);

    }
}
