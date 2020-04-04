<?php

use Illuminate\Database\Seeder;

class StrapsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\straps::class,10)->create();
    }
}
