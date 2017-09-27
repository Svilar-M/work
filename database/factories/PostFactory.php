


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

$factory->define(App\Post::class, function (Faker $faker) {
    static $password;

    return [
        
        'title' => $faker->title(null),
        'body'=> $faker->text,
        'image' => $faker->imageUrl(250, 250),
         'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
         'category_id' => function () {
            return factory(App\Category::class)->create()->id;
        },       

    ];
});
