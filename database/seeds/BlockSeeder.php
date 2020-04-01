<?php

use App\Block;
use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dir = resource_path('views/components/blocks');
        $files = getFiles($dir);
        $blocks = [];
        foreach ($files as $file) {
            $fileParts = explode('/', $file);
            $no = str_replace('.blade.php' , '' ,$fileParts[1]);
            $no = str_replace('block_' , ' ' ,$no);
            $name = $fileParts[0] . $no;
            $block = [
                'name' => $name,
                'slug' => $file,
                'path' => str_replace(resource_path('views/') , '' ,$dir),
            ];

            array_push($blocks, $block);

        }

        foreach ($blocks as $block) {
            Block::create($block);
        }
        
    }
}
