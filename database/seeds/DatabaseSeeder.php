<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker ;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create() ;
        // foreach (range(1,10) as $index) {
        //     // We are now inserting fake data values and credentials into the database 

        //     DB::table('users')->insert([
        //         'name' => str_random(10) ,
        //         'email' => str_random(10).'@gmail.com' ,
        //         'password' => bcrypt('secret')
        //     ])
        // }
        $this->call(SendCardsTableSeeder::class);
        $this->call(CardCategoriesTableSeeder::class);
        $this->call(ComplementaryCardsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
