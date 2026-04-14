<?php
namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Beef', 'Pork', 'Chicken', 'Duck', 'Seafood',
            'Marinated Items', 'Side Dishes', 'Snacks',
            'Salads', 'Sushi', 'Drinks',
        ];

        foreach ($categories as $name) {
            Categories::firstOrCreate(['name' => $name]);
        }
    }
}
