<?php

use Illuminate\Database\Seeder;

class SendCardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\SendCard::class, 10)->create();
    }
}
