<?php

use App\Template;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $template = [
            'name' => 'bella',
            'slug' => 'bella',
            'screen_shot' => 'storage/app/public/assets/screen_shots/bella_template.jpg',
        ];
        Template::create($template);
    }
}
