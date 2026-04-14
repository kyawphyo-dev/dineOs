<?php
namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'superadmin', 'admin', 'waiter', 'kitchen_staff',
        ];

        foreach ($roles as $role) {
            Roles::firstOrCreate(['name' => $role]);
        }
    }
}
