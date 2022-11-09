<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $rol1 = Role::create(['name' => 'admin']);
        $rol2 = Role::create(['name' => 'user']);

        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'autenticacion.inicio'])->syncRoles([$rol1, $rol2]);
    }
}
