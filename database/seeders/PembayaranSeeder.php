<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i=0; $i < 5; $i++) {
            Pembayaran::create([
                'id_siswa' => $faker->numberBetween(1, 5),
                'tgl_bayar' => $faker->dateTimeBetween('2020-01-01', '2024-12-31')->format('Y-m-d'),
                'jumlah_bayar' => $faker->numberBetween(10000, 50000)
            ]);
        }
    }
}
