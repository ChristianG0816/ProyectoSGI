<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Aqui corremos todas las semillas del proyecto
        $this->call([SeederTablaPermisos::class]);
        $this->call([SuperAdminSeeder::class]);
    }
}
