<?php

use Illuminate\Database\Seeder;
use App\User;
// use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        User::insert([
            'name'=>'superadmin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('superadmin'),
            'role'=>'superadmin',
        ]);
        User::insert([
            ['name'=>'owner1',
            'email'=>'owner1@gmail.com',
            'password'=>bcrypt('owner1'),
            'role'=>'owner',
            'address'=>$faker->address,
            'phone'=>$faker->tollFreePhoneNumber,
            ],

            ['name'=>'owner2',
            'email'=>'owner2@gmail.com',
            'password'=>bcrypt('owner2'),
            'role'=>'owner',
            'address'=>$faker->address,
            'phone'=>$faker->tollFreePhoneNumber,
        ],
            
            ['name'=>'owner3',
            'email'=>'owner3@gmail.com',
            'password'=>bcrypt('owner3'),
            'role'=>'owner',
            'address'=>$faker->address,
            'phone'=>$faker->tollFreePhoneNumber,
            ]
        ]);
    }
}
