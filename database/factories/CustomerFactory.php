<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Customer;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'subsidiary_id' => $faker->numberBetween(2,4),
        'username' => $faker->name(),
        'address' => $faker->address(),
        'phone_number'=>$faker->e164PhoneNumber(),
        'number'=>$faker->numberBetween(10000, 99999),
        'city'=>$faker->city,
        'cpf_cnpj'=>$faker->numberBetween(1, 99999999999999)
    ];
});
