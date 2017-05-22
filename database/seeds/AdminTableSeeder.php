<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = faker::create();
    	for($i=0; $i<10;$i++){
    		$name = explode(" ",$faker->name);
    		DB::table('personas')->insert([
    			'nombre'     => $name[0],
    			'ap_paterno' => $name[1],
    			'ap_materno' => $name[1],
    			'ci'         => mt_rand(1000000,90000000),
    			'genero'     => rand(0,1),
    			'direccion'  => $faker->address,
    			'email'      => $faker->unique()->email,
    			'password'   => bcrypt('secret'),
    			'telefono'   => mt_rand(1000000,90000000),
    			'foto'       => $faker->imageUrl($width = 640, $height = 480),
    			'permiso'    => 1,
    			]);
    	}

    }
}
