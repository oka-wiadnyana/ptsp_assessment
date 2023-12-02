<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units=['Kepaniteraan','Kesekretariatan','Meja Ecourt','Meja Informasi dan Pengaduan'];

        foreach($units as $unit){
            DB::table('unit')->insert(['unit_name'=>$unit]);
        }
    }
}
