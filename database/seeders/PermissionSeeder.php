<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view dashboard menu', 
            'view expense menus', 
            'initiate request', 
            'view expense list', 
            'view retirements', 
            'reject and approve request',
        ];

        foreach ($permissions as $key => $permission) {
            Permission::updateOrCreate([
                'name' => $permission, 
                'guard_name' => 'web'
            ]);
        }
    }
}
