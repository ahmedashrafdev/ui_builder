<?php

use App\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $directory = resource_path('views/pages');
        $files = array_values(array_diff(scandir($directory), ['.', '..']));
        foreach($files as $file){
           Page::create([
            'name' => str_replace('.blade.php' , '' , $file),
            'slug' => $file,
            'path' => 'pages/',

           ]);
        }
    }
}
