<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Question::class, function (Faker $faker) {
  return [
    'creator_id' => $faker->numberBetween($min = 1, $max = 5),
    'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
    'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
  ];
});
