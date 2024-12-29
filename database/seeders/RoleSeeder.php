<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Normal', 'Chief Accountant', 'CEO'];
        foreach ($roles as $role) {
            Role::updateOrCreate([
                'name' => $role,
                'guard_name' => 'web',
            ]);
        }
    }
}
