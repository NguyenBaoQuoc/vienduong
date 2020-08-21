<?php

use Illuminate\Database\Seeder;
use App\Slide;
class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Slide::class, 10)->create();
    }
}
