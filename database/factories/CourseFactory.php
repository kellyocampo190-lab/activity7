<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use App\RoboticsKit;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    $roboticsKitIds = RoboticsKit::pluck('id')->toArray();

    return [
        'course_key' => strtoupper(
            $faker->unique()->bothify('ROB-###-??')
        ),
        'title' => $faker->sentence(4),
        'cover' => $faker->imageUrl(
            640,
            480,
            'technics'
        ),
        'content' => $faker->paragraphs(3, true),
        'robotics_kit_id' => $faker->randomElement(
            $roboticsKitIds
        ),
    ];
});
