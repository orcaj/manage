<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Image;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'product_id'=>$faker->numberBetween(1,5),
        'photo'=>'app-assets/images/avatar.jpg',
    ];
});
