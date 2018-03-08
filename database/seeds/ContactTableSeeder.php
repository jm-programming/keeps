<?php

use Illuminate\Database\Seeder;
use App\Contacts;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contacts::class , 20)->create();
    }
}
