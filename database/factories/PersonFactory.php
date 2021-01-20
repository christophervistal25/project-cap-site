<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;

use App\Person;
use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'id'            => "166819000-" . $faker->numberBetween($min = 1, $max = 100000),
        'rapid_pass_no' => '',
        'firstname'     => $faker->firstname,
        'middlename'    => $faker->firstname,
        'lastname'      => $faker->firstname,
        'suffix'        => $faker->suffix,
        'address'       => 'Prk. Paradise',
        // 'city_zip_code'     => $faker->randomElement($array = range(8300, 8319)),
        'city_zip_code'     => 8300,
        'barangay_id'       => 1,
        'date_of_birth'     => Carbon\Carbon::now(),
        'rapid_test_issued' => Carbon\Carbon::now(),
    ];
});
