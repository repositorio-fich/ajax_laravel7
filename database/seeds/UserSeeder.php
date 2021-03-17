<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create('es_PE');
        for ($i=1; $i<100; $i++) {
            DB::table('users')->insert([
                'name'=>$faker->lastName.' '.$faker->lastName,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
