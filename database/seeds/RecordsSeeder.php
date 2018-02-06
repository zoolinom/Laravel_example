<?php

use Illuminate\Database\Seeder;

class RecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Records::class, 5)->create();
    }
}
