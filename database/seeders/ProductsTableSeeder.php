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
            'name' => 'Café con leche',
            'slug' => 'Café-leche',
            'details' => '250 ml, Café, Leche, 75°C',
            'price' => 35,
            'shipping_cost' => 0,
            'description' => 'Semejante al cortado, el café con leche supone la incorporación de leche al café, solo que en esta ocasión se utiliza una proporción igual o semejante del lácteo y el café',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'cafe.jpg'
        ]);

        Product::create([
            'name' => 'Carajillo',
            'slug' => 'Carajillo',
            'details' => '150 ml, Café, brandy',
            'price' => 35,
            'shipping_cost' => 0,
            'description' => 'Café preparado como un espresso al cual se le añade además de la infusión una cierta cantidad de alguna bebida espirituosa, siendo lo más general el brandy, el orujo o el whisky',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'cafe.jpg'
        ]);

        Product::create([
            'name' => 'Americano',
            'slug' => 'Americano',
            'details' => '250 ml, Café, Agua, 75°C',
            'price' => 35,
            'shipping_cost' => 0,
            'description' => 'Es un tipo de café derivado del espresso el cual se caracteriza por añadir una cantidad de agua mucho mayor de lo habitual en este tipo de preparación',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'cafe.jpg'
        ]);

        Product::create([
            'name' => 'Cortado o macchiato',
            'slug' => 'Cortado-macchiato',
            'details' => '250 ml, Café, Leche, 75°C',
            'price' => 35,
            'shipping_cost' => 0,
            'description' => 'Uno de los más demandados por lo general, llamamos cortado o macchiato a un tipo de café espresso a la cual se le agrega una ligera cantidad de leche, que manche o tiña el café',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'cafe.jpg'
        ]);

        Product::create([
            'name' => 'Capuchino',
            'slug' => 'Capuchino',
            'details' => '250 ml, Café, Leche, 75°C',
            'price' => 35,
            'shipping_cost' => 0,
            'description' => 'Semejante al café con leche con la excepción de que en este caso solo encontraremos alrededor de un tercio de café',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'cafe.jpg'
        ]);
    }
}
