<?php

use Illuminate\Database\Seeder;

class CardCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\CardCategory::class, 3)->create();
    }
}
