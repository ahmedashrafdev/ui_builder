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
        $this->call(TemplateSeeder::class);
        $this->call(WebsiteSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(BlockSeeder::class);
        $this->call(PartialSeeder::class);
        $this->call(ComponentSeeder::class);
        $this->call(LayoutSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(BlockPageSeeder::class);
    }
}
