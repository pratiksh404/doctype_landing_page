<?php

use Illuminate\Database\Seeder;
use doctype_admin\Landing\Models\Landing;

class LandingsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Landing::class)->create();
    }
}
