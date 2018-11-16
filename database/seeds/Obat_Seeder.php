<?php

use Illuminate\Database\Seeder;

class Obat_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		 $faker = Faker\Factory::create(); //import library faker
		
		$Limit = 10;
		
		for ($i = 0; $i < $Limit; $i++){
			DB::table('obat')->insert([
				'nama_obat'=> $faker->name,
				'harga_obat'=> $faker->numberBetween($min = 1000, $max = 9000), //email unique
				'stok' => $faker->randomDigit,
				'expired_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
				'production_date' => $faker->date($format = 'Y-m-d', $min = 'now'),
			]);
		}
    }
}
