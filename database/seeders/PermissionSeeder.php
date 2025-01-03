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
            'view expense menu', 
            'view initiate request submenu', 
            'view expense submenu', 
            'view retirements submenu', 
            'reject and approve request',
            'view report menu',
            'view calendar menu',
            'fill retirements form',
            'view initiator column'
        ];

        foreach ($permissions as $key => $permission) {
            Permission::updateOrCreate([
                'name' => $permission, 
                'guard_name' => 'web'
            ]);
        }
    }
}
