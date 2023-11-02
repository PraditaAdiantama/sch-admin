<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $major_options = [
            "Broadcast TV & Film",
            "Desain Komunikasi Visual",
            "Kimia Analisis",
            "Teknik Instalasi Tenaga Listrik",
            "Teknik Otomasi Industri",
            "Teknik Jaringan Komputer dan Telekomunikasi",
            "Teknik Otomotif",
            "Teknik Las",
            "Teknik Mesin",
        ];
        foreach($major_options as $major){
            DB::table('majors')->insert([
                'name' => $major
            ]);
        }
    }
}
