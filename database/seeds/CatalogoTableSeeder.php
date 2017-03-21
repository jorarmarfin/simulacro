<?php

use Illuminate\Database\Seeder;
use App\Models\Catalogo;

class CatalogoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catalogo::create(['idtable' => 0,'iditem' => 0, 'codigo' => 'MAE','nombre'=>'MAESTRO','descripcion'=>'MAESTRO DE TABLAS','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 0,'iditem' => 1, 'codigo' => 'ROLES','nombre' => 'ROLES','descripcion'=>'Rol de lo su suarios al sistema','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 0,'iditem' => 2, 'codigo' => 'SEXO','nombre' => 'SEXO','descripcion'=>'SEXO','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 0,'iditem' => 3, 'codigo' => 'GRADO','nombre' => 'GRADO','descripcion'=>'GRADOS','valor'=> null,'activo'=>true]);

        /**
         * sub tablas
         */
        Catalogo::create(['idtable' => 1,'iditem' => 1, 'codigo' => 'root','nombre' => 'root','descripcion'=>'Administrador del sistema','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 1,'iditem' => 2, 'codigo' => 'adm','nombre' => 'Administrador','descripcion'=>'Administrador la Institucion educativa ','valor'=> null,'activo'=>true]);
        /**
         * Sexo
         */
        Catalogo::create(['idtable' => 2,'iditem' => 1, 'codigo' => 'M','nombre' => 'Masculino','descripcion'=>'Masculino','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 2,'iditem' => 2, 'codigo' => 'F','nombre' => 'Femenino','descripcion'=>'Femenino','valor'=> null,'activo'=>true]);
        /**
         * GRADOS
         */
        Catalogo::create(['idtable' => 3,'iditem' => 1, 'codigo' => '1A','nombre' => 'Primer Año','descripcion'=>'Primer Año','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 3,'iditem' => 2, 'codigo' => '2A','nombre' => 'Segundo Año','descripcion'=>'Segundo Año','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 3,'iditem' => 3, 'codigo' => '3A','nombre' => 'Tercer Año','descripcion'=>'Tercer Año','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 3,'iditem' => 4, 'codigo' => '4A','nombre' => 'Cuarto Año','descripcion'=>'Cuarto Año','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 3,'iditem' => 5, 'codigo' => '5A','nombre' => 'Quinto Año','descripcion'=>'Quinto Año','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 3,'iditem' => 6, 'codigo' => '6O','nombre' => 'Otro','descripcion'=>'Otro','valor'=> null,'activo'=>true]);



    }
}
