<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=20; $i++){
        DB::table('companies')->insert([

            'Client_ID'=>Str::random(10),
            'Branch_Code'=>Str::random(10),
            'Company_Name'=>Str::random(15),
            'Company_Address'=>Str::random(30),
 
            'Status'=>Str::random(7),


        ]);
    }
    }
}
