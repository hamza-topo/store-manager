<?php

namespace Database\Seeders;

use App\Models\Customer as ModelsCustomer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
         DB::table('customers')->insert([
            'firstname'=>$faker->name(),
            'lastname'=>$faker->name(),
            'email'=>$faker->safeEmail,
            'phone'=>$faker->phoneNumber, 
            'birth'=>$faker->dateTimeThisMonth(), 
            'sexe'=> $faker->randomElement([0, 1]), 
            'points'=> $faker->randomElement([0, 50]), 
            'store_id'=>1, 
            'user_id'=>2, 
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        
    }
}
