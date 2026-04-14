<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['email'   => 'superadmin@example.com',
                'role_id'  => 1,
                'password' => bcrypt('superadmin1234'),
            ],
            ['email'   => 'admin@example.com',
                'role_id'  => 2,
                'password' => bcrypt('admin1234'),
            ],
            ['email'   => 'staff1@example.com',
                'role_id'  => 3,
                'password' => bcrypt('staff1234'),
            ],
            ['email'   => 'kitchenstaff1@example.com',
                'role_id'  => 1,
                'password' => bcrypt('kitchenstaff1234'),
            ],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(['email' => $user['email']], $user);
        }
    }
}
