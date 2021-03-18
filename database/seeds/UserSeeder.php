<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create('es_PE');
        for ($i=1; $i<100; $i++) {
            $name = $faker->lastName;
            $last_name=$faker->lastName;
            DB::table('users')->insert([
                'name'=>$name.' '.$last_name,
                'email' => $name.$last_name.'@gmail.com',
                'password'=>bcrypt($faker->text),
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
