<?php

use Illuminate\Database\Seeder;


class AdministradorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'AdminMolinstec',
            'email' => 'admin@molinstec.cl',
            'password' => bcrypt('admin123'),
            'apellido_paterno' => 'Durán',
            'apellido_materno' => 'Castro',
            'tipo_usuario' => 'administrador',
            'rut_usuario' => '16285258-2'
        ]);
    }
}
