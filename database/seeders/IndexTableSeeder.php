<?php

namespace Database\Seeders;

use App\Models\Index;
use Illuminate\Database\Seeder;

class IndexTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Index::create([
            'image_1'=>'files/pic1/1.jpg',
            'image_2'=>'files/pic2/2.jpg',
            'image_3'=>'files/pic3/3.jpg',
        ]);
    }
}
