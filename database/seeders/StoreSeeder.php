<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        Store::create([
            'sender_id'=>$faker->name(),
            'owner_id'=>$faker->numberBetween(1,4),
            'activity_id'=>$faker->numberBetween(1,4),
            'logo'=>$faker->imageUrl(75,75),
            'name'=>$faker->firstName(),
            'phone'=>$faker->phoneNumber(),
            'contact'=>$faker->name(),
            'tva'=>20,
            'address'=>$faker->address(),//text
            'invoice_message'=>$faker->text(),
            'allow_camp'=>$faker->boolean()
        ]);
    }
}
