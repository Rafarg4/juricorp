<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()


    {
        Permission::create(['name' => 'crear-expediente']);
        Permission::create(['name' => 'editar-expediente']);
        Permission::create(['name' => 'borrar-expediente']);
        Permission::create(['name' => 'ver-expediente']);
        Permission::create(['name' => 'crear-audiencia']);
        Permission::create(['name' => 'editar-audiencia']);
        Permission::create(['name' => 'borrar-audiencia']);
        Permission::create(['name' => 'ver-audiencia']);
        Permission::create(['name' => 'crear-pago']);
        Permission::create(['name' => 'editar-pago']);
        Permission::create(['name' => 'borrar-pago']);
        Permission::create(['name' => 'ver-pago']);
        Permission::create(['name' => 'crear-gasto']);
        Permission::create(['name' => 'editar-gasto']);
        Permission::create(['name' => 'borrar-gasto']);
        Permission::create(['name' => 'ver-gasto']);
         Permission::create(['name' => 'ver-reporte']);

        $adminRole = Role::create(['name' => 'Admin']);
        $secretarioRole = Role::create(['name' => 'Secretario']);

        $adminRole->givePermissionTo([
            'crear-expediente',
            'editar-expediente',
            'borrar-expediente',
            'ver-expediente',
            'crear-audiencia',
            'editar-audiencia',
            'borrar-audiencia',
            'ver-audiencia',
            'crear-pago',
            'editar-pago',
            'borrar-pago',
            'ver-pago',
            'crear-gasto',
            'editar-gasto',
            'borrar-gasto',
            'ver-gasto',
            'ver-reporte'
        ]);

        $secretarioRole->givePermissionTo([
            'crear-expediente',
            'editar-expediente',
            'ver-expediente',
            'crear-audiencia',
            'editar-audiencia',
            'ver-audiencia',
            'crear-pago',
            'crear-gasto'
        ]);
    }
   
}
