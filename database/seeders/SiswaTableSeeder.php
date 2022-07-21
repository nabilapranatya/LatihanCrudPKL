<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['Nis'=> '10', 'Nama_siswa' => 'Nabila', 'Alamat_siswa' => 'Kota baru', 'Tanggal_lahir' => '2005-10-01'],
            ['Nis'=> '9', 'Nama_siswa' => 'Zaky', 'Alamat_siswa' => 'Cibaduyut', 'Tanggal_lahir' => '2004-09-11'],

        ];

        DB::table('siswas')->insert($sampel);
    }
}
