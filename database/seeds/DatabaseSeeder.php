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
        //invocar la tabla RoleTableSeeder
        $this->call(RoleTableSeeder::class);
    }
}
