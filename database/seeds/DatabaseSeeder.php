<?php

use Illuminate\Database\Seeder;
use App\siswa;
use App\kelas;
use App\agama;
use App\gender;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        siswa::create([
            'nama'  => "siapa?",
            'id_kelas' => 1,
            'nis'   => "123456",
            'id_gender' => 1,
            'id_agama'  => 1,
        ]);

        siswa::create([
            'nama'  => "dimana?",
            'id_kelas' => 2,
            'nis'   => "123456",
            'id_gender' => 1,
            'id_agama'  => 1,
        ]);

        siswa::create([
            'nama'  => "kapan?",
            'id_kelas' => 3,
            'nis'   => "123456",
            'id_gender' => 1,
            'id_agama'  => 1,
        ]);

        siswa::create([
            'nama'  => "kenapa?",
            'id_kelas' => 1,
            'nis'   => "123456",
            'id_gender' => 1,
            'id_agama'  => 1,
        ]);

        gender::create([
            'gender'   => 'Laki-Laki'
        ]);

        gender::create([
            'gender'   => 'Perempuan'
        ]);

        agama::create([
            'agama' => 'islam'
        ]);

        agama::create([
            'agama' => 'kristen'
        ]);

        agama::create([
            'agama' => 'hindu'
        ]);

        agama::create([
            'agama' => 'budha'
        ]);

        kelas::create([
            'kelas' => 'X-RPL'
        ]);

        kelas::create([
            'kelas' => 'XI-RPL'
        ]);

        kelas::create([
            'kelas' => 'XII-RPL'
        ]);

        kelas::create([
            'kelas' => 'X-MM'
        ]);
    }
}
