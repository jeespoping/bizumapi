<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'amount' => $faker->word,
        'cell' => $faker->word,
        'user_id' => factory(\App\Models\User::class),
    ];
});
