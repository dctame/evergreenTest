<?php

use Illuminate\Database\Seeder;

class KittensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\kittens::class, 50)->create();
    }
}
