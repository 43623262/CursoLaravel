<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Admin\Permiso;
$factory->define(Permiso::class, function (Faker $faker) {
     
    return [
        'nombre' => $faker->word,
        'slug' => $faker->word,
    ];
});
