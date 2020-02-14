<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call
        (
            [
                /* SETTINGS
                ================================================== */
                UserTableSeeder::class, ## USER

                /* SUPPORT (MODULE 2.1)
                ================================================== */
                ContactTableSeeder::class, ## CONTACT
            
            ] //

        ); // call

    } // run

} // DatabaseSeeder
