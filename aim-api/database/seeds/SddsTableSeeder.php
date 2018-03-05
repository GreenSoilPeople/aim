<?php

use Illuminate\Database\Seeder;

class SddsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Sdd::class, 50)->create();
    }
}
