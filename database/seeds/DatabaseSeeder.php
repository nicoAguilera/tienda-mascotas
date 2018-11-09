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

        \DB::table('species')->insert([
        	[	
        		"id"		=>	1,
        		"name"	=>	"sin definir"
            ],
            [   
                "id"        =>  2,
                "name"  =>  "perro"
            ],
        	[
        		"id"		=>	3,
        		"name"	=>	"gato"
            ],
        	[
        		"id"		=>	4,
        		"name"	=>	"ave"
        	]
        ]);

        // Mascotas
        \DB::table('pets')->insert([
        	[
        		"name"	       		=>	"pier",
        		"gender"			=>	"M",
        		"birthdate"         =>	"2016-09-11",
        		"death_date"		=>	"2017-11-16",
        		"discharge_date"	=>	"2016-10-01",
        		"observation"		=>	"muy bonito",
                "species_id"        =>  1
        	],
        	[
        		"name"    			=>	"clara",
        		"gender"			=>	"F",
        		"birthdate"	        =>	"2014-09-11",
        		"death_date"		=>	"2018-03-25",
        		"discharge_date"	=>	"2016-10-01",
        		"observation"		=>	"blanco y negro",
                "species_id"        =>  2
        	]
        ]);
    }
}
