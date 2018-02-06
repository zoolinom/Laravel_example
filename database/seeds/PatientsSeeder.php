<?php

use Illuminate\Database\Seeder;
use \Illuminate\Foundation\Testing\RefreshDatabase;

class PatientsSeeder extends Seeder
{
    use RefreshDatabase;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Patient::class, 5)->create();
    }
}
