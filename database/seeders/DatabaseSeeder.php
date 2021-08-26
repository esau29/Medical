<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /* $admin = new \App\Models\Administrador();
        $admin->nombre = 'Admin';
        $admin->email = 'jorgeadmin@gmail.com';
        $admin->telefono = '9672297046';
        $admin->password = Hash::make('Admin');
        $admin->save(); */

        $pacientes = new \App\Models\pacientes();
        $pacientes->usuario = 'Jorge';
        $pacientes->sexo = 'Hombre';
        $pacientes->nombre = 'jorged';
        $pacientes->pass = Hash::make('Jorge');
        $pacientes->email = 'jorge@gmail.com';
        $pacientes->telefono = '9637654321';
        $pacientes->save();
    }
}
