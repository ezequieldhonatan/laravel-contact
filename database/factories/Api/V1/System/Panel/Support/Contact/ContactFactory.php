<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Api\V1\System\Panel\Support\Contact\Contact;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        
        /* DADOS DO CONTATO
        ================================================== */
        'ip'                                => $faker->ipv4,

        'name'                              => $faker->name,
        'email'                             => $faker->unique()->safeEmail,
        'cell_phone'                        => $faker->phoneNumber,
        'annex'                             => $faker->url,
        'message'                           => $faker->text()
        
    ]; // return

}); // factory

