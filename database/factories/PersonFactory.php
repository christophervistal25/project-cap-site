<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\Province;
use App\Barangay;
use App\City;


use App\Person;
use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'firstname'         => $faker->firstname,
        'middlename'        => $faker->firstname,
        'lastname'          => $faker->firstname,
        'suffix'            => $faker->suffix,
        'address'           => 'Prk. Paradise',
        'province_code'     => Province::first()->code,
        'city_code'         => City::first()->code,
        'temporary_address' => $faker->address,
        'address'           => $faker->address,
        'barangay_code'     => Barangay::first()->code,
        'age'               => 20,
        'civil_status'      => 'Single',
        'phone_number'      => '09193693499',
        'date_of_birth'     => Carbon\Carbon::now(),
    ];
});
