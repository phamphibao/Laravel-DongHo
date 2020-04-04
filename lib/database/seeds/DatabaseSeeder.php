<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(BrandSeeder::class);
        
         $this->call(StrapsSeeder::class);
         $this->call(TypeSeeder::class);

         $this->call(ProductsSeeder::class);
    }
}
