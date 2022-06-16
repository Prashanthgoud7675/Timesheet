<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i<=20; $i++){

            $Employee = new Employee();
            $Employee->Name=$faker->Name;
            $Employee->My_ADP=$faker->My_ADP;
            $Employee->Paperless=$faker->Paperless;
          
            $Employee->contact_info=$faker->contact_info;
            $Employee->employment_type=$faker->employment_type;
            $Employee->Status=$faker->Status;
            $Employee->save();

        }
    }
}
