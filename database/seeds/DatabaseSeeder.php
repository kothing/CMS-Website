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
        $this->call(AdminsTableSeeder::class);
        $this->call(SystemInfosTableSeeder::class);
        $this->call(NavigationCategoriesTableSeeder::class);
        $this->call(NavigationsTableSeeder::class);
        $this->call(MajorLinksTableSeeder::class);
        $this->call(LinksTableSeeder::class);
    }
}
