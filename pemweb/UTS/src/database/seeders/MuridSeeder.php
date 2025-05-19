<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Murid;
use Illuminate\Database\Seeder;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Murid::create([
            'nama' => 'nama',
            'nis' => 'nis',
            'kelas' => 'kelas',
            'alamat' => 'alamat'
        ]);
    }
}
