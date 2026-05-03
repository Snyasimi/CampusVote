<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed positions first
        $this->call(PositionsSeeder::class);

        // Create a default admin user
        \App\Models\User::firstOrCreate(
            ['email' => 'admin@mku.ac.ke'],
            [
                'first_name'     => 'Admin',
                'last_name'      => 'User',
                'role'           => 'admin',
                'role_number'    => 'ADMIN001',
                'phone_number'   => '0700000000',
                'school'         => 'Administration',
                'account_status' => 'active',
                'password'       => Hash::make('admin1234'),
            ]
        );

        \App\Models\User::factory(20)->create();
        \App\Models\Candidate::factory(20)->create();
    }
}
