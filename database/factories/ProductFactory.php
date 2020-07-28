<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Product;

            

$factory->define(Product::class, function (Faker $faker) {
    return [
        'sn'=>24200,
        'customer_id' => $faker->numberBetween(1,5),
        'subsidiary_id'=>$faker->numberBetween(2,4),
        'equipament' =>$faker->word,
        'brand' =>$faker->word,
        'serial_number' =>$faker->unique()->randomNumber,
        'defect' =>$faker->text,
        'description' =>$faker->text,
        'observations' =>$faker->text,
        'optional' =>false,
        'status'=>'pre-budget',
        'access'=>'access',
        'numeric_digits' =>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'store' =>$faker->word,
        'model'=>$faker->word,
        'purchase_date' =>$faker->date($format = 'Y-m-d', $min = 'now'),
    ];
});
