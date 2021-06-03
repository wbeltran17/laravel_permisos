<?php

namespace Database\Seeders;

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
        $role = Role::create(['name' => 'admin']);
        Permission::create(['name' => 'listar_usuario'])->syncRoles($role);


        $role2 = Role::create(['name' => 'guest']);
        Permission::create(['name' => 'book.create'])->syncRoles([$role, $role2]);;
        Permission::create(['name' => 'book.update'])->syncRoles($role);;
        Permission::create(['name' => 'book.list'])->syncRoles([$role, $role2]);;
        Permission::create(['name' => 'book.delete'])->syncRoles($role);;
    }
}
