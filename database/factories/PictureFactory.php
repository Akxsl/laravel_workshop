<?php

use Faker\Generator as Faker;

$factory->define(App\Picture::class, function (Faker $faker) {
	return [
                'categories_id' => $faker -> word(),
                'link' => $faker -> word(),
                'post_id' => $faker -> word()
	];
});
