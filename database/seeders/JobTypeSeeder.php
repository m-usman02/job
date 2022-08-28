<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = [
            ['name'=>'Android Phone Data Recovery','price'=>100],
            ['name'=>'Android Tablet Data Recovery','price'=>120],
            ['name'=>'IOS Phone Data Recovery','price'=>130],
            ['name'=>'IOS Tablet Data Recovery','price'=>140],
            ['name'=>'SSD Data Recovery','price'=>150],
            ['name'=>'HDD Data Recovery','price'=>160],
            ['name'=>'SD Card Data Recovery','price'=>160],
        ];

        DB::table("job_types")->insert($type);
    }
}
