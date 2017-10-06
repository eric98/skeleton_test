<?php

use Ergare17\Skeleton\Models\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'completed' => $faker->boolean,
    ];
});

// factory('App\Task');