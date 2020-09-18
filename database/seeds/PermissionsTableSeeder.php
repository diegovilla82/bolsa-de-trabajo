<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Permission::class, 20)->create();
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalle de usuarios',
            'slug' => 'users.show',
            'description' => 'Ver en detalle cada usuario del sistema'
        ]);

        Permission::create([
            'name' => 'Edicion de usuarios',
            'slug' => 'users.edit',
            'description' => 'Editar cualquier dato de un usuario del sistema'
        ]);

        Permission::create([
            'name' => 'Eliminar usuarios',
            'slug' => 'users.destroy',
            'description' => 'Eliminar cualquier dato de un usuario del sistema'
        ]);

        // ROLES

        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema'
        ]);

        Permission::create([
            'name' => 'Creación de roles',
            'slug' => 'roles.create',
            'description' => 'Crear roles para el sistema'
        ]);

        Permission::create([
            'name' => 'Ver detalle de roles',
            'slug' => 'roles.show',
            'description' => 'Ver en detalle cada role del sistema'
        ]);

        Permission::create([
            'name' => 'Edicion de roles',
            'slug' => 'roles.edit',
            'description' => 'Editar cualquier dato de un role del sistema'
        ]);

        Permission::create([
            'name' => 'Eliminar roles',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar cualquier dato de un role del sistema'
        ]);

        // PRODUCTOS

        Permission::create([
            'name' => 'Navegar personas',
            'slug' => 'personas.index',
            'description' => 'Lista y navega todos las personas del sistema'
        ]);

        Permission::create([
            'name' => 'Creación de personas',
            'slug' => 'personas.create',
            'description' => 'Crear personas para el sistema'
        ]);

        Permission::create([
            'name' => 'Ver detalle de personas',
            'slug' => 'personas.show',
            'description' => 'Ver en detalle cada entrada del sistema'
        ]);

        Permission::create([
            'name' => 'Edicion de entrada',
            'slug' => 'personas.edit',
            'description' => 'Editar cualquier dato de una entrada del sistema'
        ]);

        Permission::create([
            'name' => 'Eliminar entrada',
            'slug' => 'personas.destroy',
            'description' => 'Eliminar cualquier dato de una entrada del sistema'
        ]);
    }
}
