<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\peoples;

class PeoplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        peoples::insert([
            'nama'=>"siti",
            'alamat'=>"lande",
            'umur'=>12,
            'statusPekerjaan'=>"skolah",
        ]);
        peoples::insert([
            'nama'=>"siti",
            'alamat'=>"lande",
            'umur'=>12,
            'statusPekerjaan'=>"skolah",
        ]);
        peoples::insert([
            'nama'=>"siti",
            'alamat'=>"lande",
            'umur'=>12,
            'statusPekerjaan'=>"skolah",
        ]);
        peoples::insert([
            'nama'=>"siti",
            'alamat'=>"lande",
            'umur'=>12,
            'statusPekerjaan'=>"skolah",
        ]);
        peoples::insert([
            'nama'=>"siti",
            'alamat'=>"lande",
            'umur'=>12,
            'statusPekerjaan'=>"skolah",
        ]);
    }
}
