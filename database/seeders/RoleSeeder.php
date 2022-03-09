<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'users module']);
        Permission::create(['name' => 'reports module']);

        $role_technical = Role::create(['name' => 'technical']);
        $role_vendor = Role::create(['name' => 'vendor']);
        $role_admin = Role::create(['name' => 'admin']);

        $role_technical->givePermissionTo('reports module');
        $role_admin->givePermissionTo(Permission::all());
    }
}
