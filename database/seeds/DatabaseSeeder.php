<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Especies
        Model::unguard();

        \DB::table('especie')->insert([
        	[	
        		"id"		=>	1,
        		"nombre"	=>	"perro"],
        	[
        		"id"		=>	2,
        		"nombre"	=>	"gato"],
        	[
        		"id"		=>	3,
        		"nombre"	=>	"ave"
        	]
        ]);

        // Mascotas
        \DB::table('mascotas')->insert([
        	[
        		"nombre"			=>	"pier",
        		"sexo"				=>	"M",
        		"fecha_nacimiento"	=>	"2016-09-11",
        		"fecha_muerte"		=>	"2017-11-16",
        		"fecha_alta"		=>	"2016-10-01",
        		"descripcion"		=>	"muy bonito"
        	],
        	[
        		"nombre"			=>	"clara",
        		"sexo"				=>	"F",
        		"fecha_nacimiento"	=>	"2014-09-11",
        		"fecha_muerte"		=>	"2018-03-25",
        		"fecha_alta"		=>	"2016-10-01",
        		"descripcion"		=>	"blanco y negro"
        	]
        ]);
    }
}
