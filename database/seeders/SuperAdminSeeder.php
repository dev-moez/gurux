<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\RoleEnum;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => env('SUPER_ADMIN_EMAIL'),
        ], [
            'name' => env('SUPER_ADMIN_NAME'),
            'password' => Hash::make(env('SUPER_ADMIN_PASSWORD')),
        ])->syncRoles(RoleEnum::ROLE_SUPER_ADMIN);
    }
}
