<?php
namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [

            // 🥩 Beef
            [
                'name'        => 'Wagyu Beef Slice',
                'category_id' => 1,
                'description' => 'Premium wagyu beef for BBQ grilling',
                'price'       => 0,
                'image'       => 'wagyu.jpg',

            ],
            [
                'name'        => 'Beef Short Plate',
                'category_id' => 1,
                'description' => 'Juicy sliced beef short plate',
                'price'       => 0,
                'image'       => 'beef_short_plate.jpg',

            ],

            // 🐷 Pork
            [
                'name'        => 'Pork Belly Slice',
                'category_id' => 2,
                'description' => 'Thin sliced pork belly',
                'price'       => 0,
                'image'       => 'pork_belly.jpg',

            ],
            [
                'name'        => 'Pork Neck',
                'category_id' => 2,
                'description' => 'Tender pork neck cuts',
                'price'       => 0,
                'image'       => 'pork_neck.jpg',

            ],

            // 🍗 Chicken
            [
                'name'        => 'Chicken Fillet',
                'category_id' => 3,
                'description' => 'Fresh chicken fillet',
                'price'       => 0,
                'image'       => 'chicken_fillet.jpg',

            ],
            [
                'name'        => 'Chicken Wings',
                'category_id' => 3,
                'description' => 'BBQ chicken wings',
                'price'       => 0,
                'image'       => 'chicken_wings.jpg',

            ],

            // 🦐 Seafood
            [
                'name'        => 'Shrimp',
                'category_id' => 4,
                'description' => 'Fresh shrimp for grilling',
                'price'       => 0,
                'image'       => 'shrimp.jpg',

            ],
            [
                'name'        => 'Squid',
                'category_id' => 4,
                'description' => 'Tender squid slices',
                'price'       => 0,
                'image'       => 'squid.jpg',

            ],

            // 🔥 Marinated Items
            [
                'name'        => 'Marinated Beef Bulgogi',
                'category_id' => 5,
                'description' => 'Sweet soy marinated beef',
                'price'       => 0,
                'image'       => 'bulgogi.jpg',

            ],
            [
                'name'        => 'Spicy Pork',
                'category_id' => 5,
                'description' => 'Spicy marinated pork',
                'price'       => 0,
                'image'       => 'spicy_pork.jpg',

            ],

            // 🍜 Side Dishes
            [
                'name'        => 'Fried Rice',
                'category_id' => 8,
                'description' => 'Classic fried rice',
                'price'       => 0,
                'image'       => 'fried_rice.jpg',

            ],
            [
                'name'        => 'Instant Noodles',
                'category_id' => 8,
                'description' => 'Hot noodle soup',
                'price'       => 0,
                'image'       => 'noodles.jpg',

            ],

            // 🥗 Salads
            [
                'name'        => 'Kimchi',
                'category_id' => 10,
                'description' => 'Traditional Korean kimchi',
                'price'       => 0,
                'image'       => 'kimchi.jpg',

            ],

            // 🍣 Sushi
            [
                'name'        => 'Salmon Sushi',
                'category_id' => 11,
                'description' => 'Fresh salmon sushi',
                'price'       => 0,
                'image'       => 'salmon_sushi.jpg',

            ],
        ];

        foreach ($menus as $menu) {
            Menu::firstOrCreate(
                ['name'        => $menu['name'],
                    'is_available' => true], // prevent duplicate
                $menu,
            );
        }

    }
}
