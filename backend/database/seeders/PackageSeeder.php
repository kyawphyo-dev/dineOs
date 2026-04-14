<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            $packages = [
                [
                    'name'        => 'Standard Buffet',
                    'price'       => 299,
                    'duration'    => 90,
                    'description' => 'Basic BBQ buffet with selected meats and side dishes',

                ],
                [
                    'name'        => 'Premium Buffet',
                    'price'       => 499,
                    'duration'    => 120,
                    'description' => 'Includes premium beef, seafood, and more variety',

                ],
                [
                    'name'        => 'VIP Buffet',
                    'price'       => 699,
                    'duration'    => 120,
                    'description' => 'All menu access including wagyu and special items',
                ],
            ],
        ];
    }
}
