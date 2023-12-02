<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels=[
            ['level'=>'admin'],
           
            ['level'=>'kepaniteraan'],
            ['level'=>'kesekretariatan'],
            ['level'=>'meja_ecourt'],
            ['level'=>'informasi'],
            
            ];

        foreach($levels as $level){
            DB::table('level')->insert([
                'level_name' => $level['level'],
               
                
            ]);
        }
    }
}
