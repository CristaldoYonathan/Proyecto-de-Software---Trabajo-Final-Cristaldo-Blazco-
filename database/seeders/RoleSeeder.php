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
//        En esta seccion se crean 4 roles: admin, inquilino, propietario e invitado y se le asigna una variabla a cada uno de ellos
        $admin = Role::create(['name' => 'admin']);
        $inquilino = Role::create(['name' => 'inquilino']);
        $propietario = Role::create(['name' => 'propietario']);
        $invitado = Role::create(['name' => 'invitado']);

//        Creacion de persimos para todas las rutas existentes en el proyecto con operaciones de CRUD

        Permission::create(['name' => 'admin.home', 'description' => 'Ver el dashboard'])->syncRoles([$admin, $inquilino, $propietario, $invitado]);
        Permission::create(['name' => 'admin.users.index', 'description' => 'Ver listado de usuarios'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.users.edit', 'description' => 'Asignar rol a usuarios'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.users.destroy', 'description' => 'Eliminar usuarios'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.roles.index', 'description' => 'Ver listado de roles'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.roles.create', 'description' => 'Crear roles'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.roles.edit', 'description' => 'Editar roles'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.roles.destroy', 'description' => 'Eliminar roles'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.permissions.index', 'description' => 'Ver listado de permisos'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.permissions.create', 'description' => 'Crear permisos'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.permissions.edit', 'description' => 'Editar permisos'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.permissions.destroy', 'description' => 'Eliminar permisos'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.properties.index', 'description' => 'Ver listado de propiedades'])->syncRoles([$admin, $inquilino, $propietario, $invitado]);
        Permission::create(['name' => 'admin.properties.create', 'description' => 'Crear propiedades'])->syncRoles([$admin, $propietario]);
        Permission::create(['name' => 'admin.properties.edit', 'description' => 'Editar propiedades'])->syncRoles([$admin, $propietario]);
        Permission::create(['name' => 'admin.properties.destroy', 'description' => 'Eliminar propiedades'])->syncRoles([$admin, $propietario]);

    }
}
