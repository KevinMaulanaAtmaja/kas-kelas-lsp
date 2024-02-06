<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for($i = 0; $i < 5; $i++){
            Siswa::create([
                'nama' => $faker->name,
                'kelas' => $faker->randomElement(['X - RPL', 'XI - RPL', 'XII - PPLG'])
            ]);
        }
    }
}
