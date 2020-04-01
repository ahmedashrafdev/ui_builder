<?php

use App\Website;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $website = [
            'template_id' => 1,
            'name' => 'bella',
            'slug' => 'bella',
            'customer' => 'ahmed ashraf',
            'phone' => '01022052546',
        ];
        Website::create($website);
    }
}
