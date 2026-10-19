<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Toy;

class ToySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toys = [
            [
                'name'        => 'Lego City Police Station',
                'age_group'   => '6-12 Tahun',
                'category'    => 'Balok & Konstruksi',
                'price'       => 750000,
                'image'       => 'lego.jpg',
                'description' => 'Set mainan konstruksi kantor polisi dengan kendaraan dan minifigure lengkap.'
            ],
            [
                'name'        => 'Mobil Remote Control RC Monster',
                'age_group'   => '8+ Tahun',
                'category'    => 'Elektronik & RC',
                'price'       => 350000,
                'image'       => 'rc_car.jpg',
                'description' => 'Mobil balap remote control dengan performa tinggi dan tahan benturan.'
            ],
            [
                'name'        => 'Boneka Teddy Bear Jumbo 1 Meter',
                'age_group'   => '3+ Tahun',
                'category'    => 'Boneka & Busa',
                'price'       => 250000,
                'image'       => 'teddy_bear.jpg',
                'description' => 'Boneka beruang berukuran jumbo 1 meter dengan bahan lembut dan halus.'
            ],
            [
                'name'        => 'Set Mainan Masak-Masakan Dapur',
                'age_group'   => '3-7 Tahun',
                'category'    => 'Peran & Ijinasi',
                'price'       => 180000,
                'image'       => 'kitchen_set.jpg',
                'description' => 'Set peralatan dapur anak lengkap dengan kompor, panci, dan aksesoris masak.'
            ],
            [
                'name'        => 'Puzzle Kayu Edukasi Abjad & Angka',
                'age_group'   => '2-5 Tahun',
                'category'    => 'Edukasi & Kayu',
                'price'       => 65000,
                'image'       => 'puzzle.jpg',
                'description' => 'Puzzle kayu edukasi untuk melatih motorik dan mengenalkan abjad serta angka pada anak.'
            ],
        ];

        foreach ($toys as $toy) {
            Toy::create($toy);
        }
    }
}