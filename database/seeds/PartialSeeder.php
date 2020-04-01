<?php

use App\Partial;
use Illuminate\Database\Seeder;

class PartialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dir = resource_path('views/components/partials');
        $partials = extractFiles($dir);
        foreach ($partials as $partial) {
            Partial::create($partial);
        }
    }
}
