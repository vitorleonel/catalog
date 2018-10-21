<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $category = App\Category::inRandomOrder()->first();

    return [
        'category_id' => $category ? $category->id : 1,
        'name' => $faker->name,
        'price' => $faker->randomNumber(2),
        'description' => $faker->text,
    ];
});
