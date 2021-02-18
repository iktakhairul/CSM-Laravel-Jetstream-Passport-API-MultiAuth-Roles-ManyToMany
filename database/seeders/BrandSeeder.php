<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create(['brand_name' => 'Toyota']);
        Brand::create(['brand_name' => 'Mercedes']);
        Brand::create(['brand_name' => 'Tesla']);
        Brand::create(['brand_name' => 'Ford']);
        Brand::create(['brand_name' => 'BMW']);

    }
}
