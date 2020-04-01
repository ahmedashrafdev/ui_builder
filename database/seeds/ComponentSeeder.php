<?php

use App\Component;
use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dir = resource_path('views/components');
        $components = extractFiles($dir , ['.' , '..' , 'blocks' , 'layouts' , 'partials']);
        foreach ($components as $component) {
            Component::create($component);
        }
    }
}
