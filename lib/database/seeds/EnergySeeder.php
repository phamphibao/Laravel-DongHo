<?php

use Illuminate\Database\Seeder;

class EnergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Energy::class,10)->create();
    }
}
