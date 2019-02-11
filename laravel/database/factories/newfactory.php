<?php

use Faker\Generator as Faker;

$factory->define(App\newmodel::class, function (Faker $faker) {
    return [
       'email'=>$faker->email,
        'password'=>$faker->password,
    ];
});
