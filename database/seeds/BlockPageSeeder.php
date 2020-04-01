<?php

use App\Page;
use App\Block;
use App\BlockPage;
use Illuminate\Database\Seeder;

class BlockPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = Page::where('slug' , 'home.blade.php')->first();
        $slugs = [
            ['sliders/block-one', 1],
            ['products/block-one', 2],
            ['products/block-two', 3],
            ['products/block-three', 4],
            ['products/block-four', 5],
            ['products/block-five', 6],
            ['products/block-six', 7],
            ['products/block-seven', 8],
            ['categories/block-one', 9],
            ['tabs/block-one', 10],
            ['testemonials/block-one', 11],
            ['posts/block-one', 12],
            ['posts/block-two', 13],
            ['partners/block-one', 14],
            ['banners/block-one', 15],
        ];
        function getBYSlug($slug){
            return Block::where('slug' , $slug)->first()->id ; 
        }
        for ($i=0; $i < count($slugs) ; $i++) { 
            # code...
            
                BlockPage::create([
                    'page_id'  => $home->id,
                    'block_id' => getBYSlug($slugs[$i][0]),
                    'ordering' => $slugs[$i][1],
                 ]);
            
        }
     
        
    }
}
