<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\SuperAdminSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call mandatory seeders
        $this->call([
            RoleSeeder::class,
            SuperAdminSeeder::class
        ]);

        // Call optional seeders for development
        if (!app()->isProduction()) {
        }
    }
}
