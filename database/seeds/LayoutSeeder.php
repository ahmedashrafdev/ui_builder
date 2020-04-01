<?php

use App\Layout;
use Illuminate\Database\Seeder;

class LayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $directory = resource_path('views/layouts');
        $files = getFiles($directory);
        $files = array_values(array_diff($files, ['app.blade.php']));
        foreach ($files as $file) {
            $parts = explode('/', $file);
            $name = isset($parts[1]) ? str_replace('.blade.php', '', $parts[1]) : str_replace('.blade.php', '', $file);
            $name = str_replace('_', ' ', $name);
            Layout::Create([
                'name' => $name,
                'slug' => $file,
                'path' => 'layouts',
            ]);
        }
    }
}
