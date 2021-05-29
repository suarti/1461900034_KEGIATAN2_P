<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
    {
        $mhs1 = new Mahasiswa;
        $mhs1->nbi = "1461900034";
        $mhs1->nama_mhs = "Suarti";
        $mhs1->save();

        $mhs2 = new Mahasiswa;
        $mhs2->nbi = "1461900040";
        $mhs2->nama_mhs = "Yosevina";
        $mhs2->save();
    }
}