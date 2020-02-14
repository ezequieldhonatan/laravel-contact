<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create
        (
            [

                'name'                      => 'Ezequiel Dhonatan',
                'email'                     => 'Ezequieldhonatan@gmail.com',
                'password'                  => bcrypt('123456789'),
                'email_verified_at'         => now(),
                'remember_token'            => Str::random(10),

            ] //

        ); // create

    } // run

} // UserTableSeeder
