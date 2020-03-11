<?php

use Illuminate\Database\Seeder;

class ComplementaryCardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\ComplementaryCard::class, 5)->create();
    }
}
