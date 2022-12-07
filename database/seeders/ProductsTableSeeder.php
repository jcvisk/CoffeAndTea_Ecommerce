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
            'name' => 'Café',
            'slug' => 'Café',
            'details' => '110 ml de café de filtro',
            'price' => 35,
            'shipping_cost' => 0,
            'description' => 'Es un café largo que se prepara vertiendo agua hirviendo sobre el café molido en un filtro. Se puede preparar de forma manual o con una cafetera de filtro. Debido a que no se prepara a alta presión, no tiene una capa de espuma en la parte superior, pero su sabor es más asentado que el del espresso.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'cafe.webp'
        ]);

        Product::create([
            'name' => 'Ristretto',
            'slug' => 'Ristretto',
            'details' => '22 ml de espresso',
            'price' => 30,
            'shipping_cost' => 0,
            'description' => 'Ristretto, que en italiano significa “limitado” o “restringido”, es un shot corto de espresso preparado con la cantidad normal de café molido, pero con la mitad de agua. Tradicionalmente los italianos lo preparan con 22 ml de café molido; los europeos del norte prefieren una versión más larga de 40 ml.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'ristretto.webp'
        ]);

        Product::create([
            'name' => 'Espresso',
            'slug' => 'Espresso',
            'details' => '30 ml de espresso',
            'price' => 45,
            'shipping_cost' => 0,
            'description' => 'Se inventó en Italia durante el siglo XIX, un shot de espresso se prepara mediante el traspaso a presión de una pequeña cantidad de agua a punto de hervir (entre 86 y 95 ºC) a través del café molido finamente. La espuma que se genera de manera natural en la parte superior es la medida del espresso perfecto.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'espresso.webp'
        ]);

        Product::create([
            'name' => 'Espresso Doble',
            'slug' => 'Espresso-doble',
            'details' => '70 ml de espresso',
            'price' => 60,
            'shipping_cost' => 0,
            'description' => 'Un espresso doble. Cuando una dosis simplemente no es suficiente.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'espresso_doble.webp'
        ]);

        Product::create([
            'name' => 'Espresso lungo',
            'slug' => 'Espresso-lungo',
            'details' => '90 ml de espresso',
            'price' => 75,
            'shipping_cost' => 0,
            'description' => 'Lungo significa "largo" en italiano. Se prepara con una dosis triple de espresso y el doble de agua, lo que produce un café extendido. Los franceses lo llaman "café allongé".',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'espresso_lungo.webp'
        ]);

        Product::create([
            'name' => 'Caffè Crema',
            'slug' => 'Caffè-Crema',
            'details' => '60 ml de espresso, 30 ml de crema espesa',
            'price' => 80,
            'shipping_cost' => 0,
            'description' => 'Quiere decir “café con crema” en italiano; este espresso doble está literalmente cubierto con crema y es especialmente popular en las fronteras entre Italia y Suiza y Austria. Así también se le llamaba a los espressos en las décadas de 1940 y 1950, ya que eran literalmente café con crema.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'cafe_crema.webp'
        ]);

        Product::create([
            'name' => 'Espresso Macchiato',
            'slug' => 'Espresso-Macchiato',
            'details' => '30 ml de espresso, Una buena dosis de espuma de leche',
            'price' => 55,
            'shipping_cost' => 0,
            'description' => 'Macchiato significa "manchado" y es un espresso con una buena dosis de espuma de leche en la parte superior. Aunque puede parecerse a un capuccino pequeño, es más fuerte y más aromático.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'espresso_macchiato.webp'
        ]);

        Product::create([
            'name' => 'Cappuccino',
            'slug' => 'Cappuccino',
            'details' => '60 ml de espresso, 60 ml de leche al vapor, 60 ml leche espumada',
            'price' => 70,
            'shipping_cost' => 0,
            'description' => 'Típica bebida italiana preparada con un shot de espresso, leche caliente y espuma de leche al vapor. En Italia, beber uno después de las 10 a. m. es algo que no se recomienda para nada, sin embargo, en el resto de Europa es muy popular a cualquier hora del día.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'cappuccino.webp'
        ]);

        Product::create([
            'name' => 'Latte Macchiato',
            'slug' => 'Latte-Macchiato',
            'details' => '60 ml de espresso, 150 ml de leche al vapor, 150 ml leche espumada',
            'price' => 70,
            'shipping_cost' => 0,
            'description' => 'Latte macchiato significa “leche manchada” en italiano. A diferencia de un latte, el espresso se agrega a la leche, en lugar de la leche al espresso. Esto “mancha” la leche. Además, tiene más espuma de leche que un latte y se usa una dosis menor de espresso.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'latte_macchiato.webp'
        ]);

        Product::create([
            'name' => 'Flat white',
            'slug' => 'Flat-white',
            'details' => '30 ml de espresso, 60 ml de leche al vapor',
            'price' => 80,
            'shipping_cost' => 0,
            'description' => 'Esta bebida nació en Nueva Zelanda en la década de 1970 como una alternativa al capuccino espumoso. La diferencia principal es que no tiene espuma de leche.',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'flat_white.webp'
        ]);

        Product::create([
            'name' => 'Café americano',
            'slug' => 'Café-americano',
            'details' => '60 ml de espresso, 90 ml de agua caliente',
            'price' => 45,
            'shipping_cost' => 0,
            'description' => 'También conocido simplemente como americano, en este estilo de café se agrega agua caliente para variar la intensidad del espresso doble. Algunas personas prefieren prepararlo con un espresso simple (30 ml).',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'cafe_americano.webp'
        ]);

        Product::create([
            'name' => 'Caffè Latte',
            'slug' => 'Caffè-Latte',
            'details' => '60 ml de espresso, 300 ml de leche al vapor, 20 ml leche espumada',
            'price' => 80,
            'shipping_cost' => 0,
            'description' => '',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'cafe_latte.webp'
        ]);
    }
}
