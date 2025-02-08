<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\RoleEnum;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all roles from App\Enums\RoleEnum
        $roles = RoleEnum::all();

        // Insert roles into database
        foreach ($roles as $role) {
            Role::updateOrCreate(['name' => $role]);
        }
    }
}
