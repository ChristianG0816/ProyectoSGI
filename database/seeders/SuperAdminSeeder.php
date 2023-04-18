<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creación del superusuario del sistema
        $usuario = User::create([
            'name'=> 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $usuario->assignRole('Administrador');

    }
}
