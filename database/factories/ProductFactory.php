<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Product;

            

$factory->define(Product::class, function (Faker $faker) {
    return [
        'customer_id' => $faker->numberBetween(1,50),
        'subsidiary_id'=>$faker->numberBetween(2,4),
        'photo'=>'app-assets/images/avatar.jpg',
        'equipament' =>
        'brand' =>
        'serial_number' =>
        'defect' =>
        'description' =>
        'observations' =>
        'numeric_digits' =>
        'store' =>
        'purchase_date' =>$faker->date($format = 'd/m/Y', $max = 'now')

    ];
} =>
