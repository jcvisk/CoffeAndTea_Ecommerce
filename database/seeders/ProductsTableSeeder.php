<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Café con leche2',
            'slug' => 'Café-leche2',
            'details' => '250 ml, Café, Leche, 75°C',
            'price' => 35,
            'shipping_cost' => 0,
            'description' => 'Semejante al cortado, el café con leche supone la incorporación de leche al café, solo que en esta ocasión se utiliza una proporción igual o semejante del lácteo y el café',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'cafe.jpg'
        ]);
    }
}
