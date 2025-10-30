<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'name' => "Adit Rendang",
            'nim' => 1231231756,
            'prodi' => "Teknologi Informasi",
            'email' => "RendangJosjis@gmail.com",
            'nohp' => 628753647517,
        ]);
    }
}