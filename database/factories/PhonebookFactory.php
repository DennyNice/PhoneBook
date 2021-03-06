<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Phonebook;
use Faker\Generator as Faker;

$factory->define(Phonebook::class, function (Faker $faker) {
    return [
// использую библиотек faker для генерации рандомных имен, мейлов, телефонов
        'name' => $faker->name(),
        'email' => $faker->email,
        'phone' => $faker->e164PhoneNumber,
        'created_at'=>$faker->dateTime(),
        'updated_at'=>$faker->dateTime

    ];
});
