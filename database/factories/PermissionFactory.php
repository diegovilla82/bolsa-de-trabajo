<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Caffeinated\Shinobi\Models\Permission;
use Faker\Generator as Faker;

$factory->define(Permission::class, function (Faker $faker) {
    $title = $faker->sentence(1);
    return [
        'name' => $title,
        'slug' => Str::slug($title),
        'description' => $faker->text(500)
    ];
});
