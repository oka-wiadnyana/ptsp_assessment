<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatpamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $satpams=[
            ['name'=>'Muna', 'nick_name'=>'Muna','nip'=>'-'],
            ['name'=>'Raga', 'nick_name'=>'Raga','nip'=>'-'],
            
            ];

        foreach($satpams as $satpam){
            DB::table('satpam')->insert([
                'name' => $satpam['name'],
                'nick_name' => $satpam['nick_name'],
                'nip' => $satpam['nip'],
               
                
            ]);
        }
    }
}
