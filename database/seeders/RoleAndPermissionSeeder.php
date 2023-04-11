<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()


    {
        $permission_array =[];
        array_push($permission_array,Permission::create(['name' => 'crear-expediente']));
        array_push($permission_array,Permission::create(['name' => 'editar-expediente']));
        array_push($permission_array,Permission::create(['name' => 'borrar-expediente']));
        array_push($permission_array,Permission::create(['name' => 'ver-expediente']));
        array_push($permission_array,Permission::create(['name' => 'crear-audiencia']));
        array_push($permission_array,Permission::create(['name' => 'editar-audiencia']));
        array_push($permission_array,Permission::create(['name' => 'borrar-audiencia']));
        array_push($permission_array,Permission::create(['name' => 'ver-audiencia']));
        array_push($permission_array,Permission::create(['name' => 'crear-pago']));
        array_push($permission_array,Permission::create(['name' => 'editar-pago']));
        array_push($permission_array,Permission::create(['name' => 'borrar-pago']));
        array_push($permission_array,Permission::create(['name' => 'ver-pago']));
        array_push($permission_array,Permission::create(['name' => 'crear-gasto']));
        array_push($permission_array,Permission::create(['name' => 'editar-gasto']));
        array_push($permission_array,Permission::create(['name' => 'borrar-gasto']));
        array_push($permission_array,Permission::create(['name' => 'ver-gasto']));
        array_push($permission_array,Permission::create(['name' => 'ver-reporte']));

        $ClienetePermission= Permission::create(['name' => 'cliente']);

        array_push($permission_array,  $ClienetePermission);

       $SuperAdminRole = Role::create(['name' => 'super_admin']);
       $SuperAdminRole->syncPermissions($permission_array);
    
       $AdminRole = Role::create(['name' => 'admin']);
       $AdminRole->syncPermissions($permission_array);


       $ClienteRole = Role::create(['name' => 'cliente']);
       $ClienteRole->syncPermissions($ClienetePermission);

         $userSuperAdmin=User::create([
                'name' => 'admin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('Admin21141998'),
                
            ]);
     $userSuperAdmin->assignRole('super_admin');

     $ClienteView=User::create([
            'name' => 'cliente',
            'email' => 'cliente@gmail.com',
            'password' => Hash::make('123456789'),
            
        ]);
     $ClienteView->assignRole('cliente');


    }


   
}
