<?php

use Illuminate\Database\Seeder;
use App\Models\Api\V1\System\Panel\Support\Contact\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contact::class, 50)->create();
    }
}
