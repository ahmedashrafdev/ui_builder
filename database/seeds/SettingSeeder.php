<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $setting = [
            "website_id" => 1,
            "description" => 'lorem',
            "keywords" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, nam? Minima deserunt laboriosam voluptatibus voluptates beatae nisi quos tempora fuga. ',
            "title" => 'bella',
            "logo" => 'storage/assets/img/logo-bella-shop.png',
            "icon" => 'storage/assets/ico/favicon.ico',
        ];
        Setting::create($setting);
    }
}
