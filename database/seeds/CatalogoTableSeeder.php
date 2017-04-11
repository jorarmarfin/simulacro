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
        Catalogo::create(['idtable' => 0,'iditem' => 4, 'codigo' => 'SERVICIO','nombre' => 'SERVICIO','descripcion'=>'SERVICIO DE BANCO','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 0,'iditem' => 5, 'codigo' => 'SEDES','nombre' => 'SEDES','descripcion'=>'SEDES','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 0,'iditem' => 6, 'codigo' => 'ESPECIALIDAD','nombre' => 'ESPECIALIDAD','descripcion'=>'ESPECIALIDAD','valor'=> null,'activo'=>true]);

        /**
         * sub tablas
         */
        Catalogo::create(['idtable' => 1,'iditem' => 1, 'codigo' => 'root','nombre' => 'root','descripcion'=>'Administrador del sistema','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 1,'iditem' => 2, 'codigo' => 'alum','nombre' => 'Alumno','descripcion'=>'Alumno','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 1,'iditem' => 3, 'codigo' => 'admin','nombre' => 'Administrador','descripcion'=>'Administrador','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 1,'iditem' => 4, 'codigo' => 'foto','nombre' => 'Editor Foto','descripcion'=>'Editor Foto','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 1,'iditem' => 5, 'codigo' => 'pago','nombre' => 'Carga Pago','descripcion'=>'Carga Pago','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 1,'iditem' => 6, 'codigo' => 'jefe','nombre' => 'Jefatura','descripcion'=>'Jefatura','valor'=> null,'activo'=>true]);
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
        /**
         * SERVICIO
         */
        Catalogo::create(['idtable' => 4,'iditem' => 1, 'codigo' => '520','nombre' => '520','descripcion'=>'INSCRIP. SIMULACRO','valor'=> 50,'activo'=>true]);
        /**
         * Sedes
         */
        Catalogo::create(['idtable' => 5,'iditem' => 1, 'codigo' => 'L','nombre' => 'Lima','descripcion'=>'Lima','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 5,'iditem' => 2, 'codigo' => 'H','nombre' => 'Huancayo','descripcion'=>'Huancayo','valor'=> null,'activo'=>true]);
        /**
         * ESPECIALIDAD
         */
        Catalogo::create(['idtable' => 6,'iditem' => 1, 'codigo' => 'A1','nombre' => 'ARQUITECTURA','descripcion'=>'ARQUITECTURA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 2, 'codigo' => 'C1','nombre' => 'INGENIERÍA CIVIL','descripcion'=>'INGENIERÍA CIVIL','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 3, 'codigo' => 'E1','nombre' => 'INGENIERÍA ECONÓMICA','descripcion'=>'INGENIERÍA ECONÓMICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 4, 'codigo' => 'E2','nombre' => 'ESTADÍSTICA','descripcion'=>'ESTADÍSTICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 5, 'codigo' => 'E3','nombre' => 'INGENIERÍA ESTADÍSTICA','descripcion'=>'INGENIERÍA ESTADÍSTICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 6, 'codigo' => 'G1','nombre' => 'INGENIERÍA GEOLÓGICA','descripcion'=>'INGENIERÍA GEOLÓGICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 7, 'codigo' => 'G2','nombre' => 'INGENIERÍA METALÚRGICA','descripcion'=>'INGENIERÍA METALÚRGICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 8, 'codigo' => 'G3','nombre' => 'INGENIERÍA DE MINAS','descripcion'=>'INGENIERÍA DE MINAS','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 9, 'codigo' => 'I1','nombre' => 'INGENIERÍA INDUSTRIAL','descripcion'=>'INGENIERÍA INDUSTRIAL','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 10, 'codigo' => 'I2','nombre' => 'INGENIERÍA DE SISTEMAS','descripcion'=>'INGENIERÍA DE SISTEMAS','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 11, 'codigo' => 'L1','nombre' => 'INGENIERÍA ELÉCTRICA','descripcion'=>'INGENIERÍA ELÉCTRICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 12, 'codigo' => 'L2','nombre' => 'INGENIERÍA ELECTRÓNICA','descripcion'=>'INGENIERÍA ELECTRÓNICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 13, 'codigo' => 'L3','nombre' => 'INGENIERÍA DE TELECOMUNICACIONES','descripcion'=>'INGENIERÍA DE TELECOMUNICACIONES','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 14, 'codigo' => 'M3','nombre' => 'INGENIERÍA MECÁNICA','descripcion'=>'INGENIERÍA MECÁNICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 15, 'codigo' => 'M4','nombre' => 'INGENIERÍA MECÁNICA-ELÉCTRICA','descripcion'=>'INGENIERÍA MECÁNICA-ELÉCTRICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 16, 'codigo' => 'M5','nombre' => 'INGENIERÍA NAVAL','descripcion'=>'INGENIERÍA NAVAL','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 17, 'codigo' => 'M6','nombre' => 'INGENIERÍA MECATRÓNICA','descripcion'=>'INGENIERÍA MECATRÓNICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 18, 'codigo' => 'N1','nombre' => 'FÍSICA','descripcion'=>'FÍSICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 19, 'codigo' => 'N2','nombre' => 'MATEMÁTICA','descripcion'=>'MATEMÁTICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 20, 'codigo' => 'N3','nombre' => 'QUÍMICA','descripcion'=>'QUÍMICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 21, 'codigo' => 'N5','nombre' => 'INGENIERÍA FÍSICA','descripcion'=>'INGENIERÍA FÍSICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 22, 'codigo' => 'P2','nombre' => 'INGENIERÍA PETROQUÍMICA','descripcion'=>'INGENIERÍA PETROQUÍMICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 23, 'codigo' => 'P3','nombre' => 'INGENIERÍA DE PETRÓLEO Y GAS NATURAL','descripcion'=>'INGENIERÍA DE PETRÓLEO Y GAS NATURAL','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 24, 'codigo' => 'Q1','nombre' => 'INGENIERÍA QUÍMICA','descripcion'=>'INGENIERÍA QUÍMICA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 25, 'codigo' => 'Q2','nombre' => 'INGENIERÍA TEXTIL','descripcion'=>'INGENIERÍA TEXTIL','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 26, 'codigo' => 'S1','nombre' => 'INGENIERÍA SANITARIA','descripcion'=>'INGENIERÍA SANITARIA','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 27, 'codigo' => 'S2','nombre' => 'INGENIERÍA DE HIGIENE Y SEGURIDAD INDUSTRIAL','descripcion'=>'INGENIERÍA DE HIGIENE Y SEGURIDAD INDUSTRIAL','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 28, 'codigo' => 'N6','nombre' => 'CIENCIA DE LA COMPUTACIÓN','descripcion'=>'CIENCIA DE LA COMPUTACIÓN','valor'=> null,'activo'=>true]);
        Catalogo::create(['idtable' => 6,'iditem' => 29, 'codigo' => 'S3','nombre' => 'INGENIERÍA AMBIENTAL','descripcion'=>'INGENIERÍA AMBIENTAL','valor'=> null,'activo'=>true]);



    }
}
