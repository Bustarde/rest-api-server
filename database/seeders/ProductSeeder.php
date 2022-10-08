<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([ 
            'title'=> 'Jacket',
            'description'=> 'Given Jacket Description',
            'currency'=> 'PHP',
            'price'=> 1234.56,
            'brand'=> 'KuyaWill',
            'category'=> 'apparel',
            'image'=> "https://netstorage-kami.akamaized.net/images/0fgjhs1shmj74jpi4g.jpg?&imwidth=1200"
        ]);

        DB::table('products')->insert([
            'title'=> 'The Great Gatsby',
            'description'=> 'The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald.',
            'currency'=> 'PHP',
            'price'=> 1300.36,
            'brand'=> 'Scribner',
            'category'=> 'book',
            'image'=> "https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/The_Great_Gatsby_Cover_1925_Retouched.jpg/800px-The_Great_Gatsby_Cover_1925_Retouched.jpg"
        ]);

        DB::table('products')->insert([
            'title'=>'iPhone 14',
            'description'=>'The latest iPhone from Apple.',
            'currency'=>'PHP',
            'price'=>30990.00,
            'brand'=>'Apple',
            'category'=>'electronic device',
            'image'=>"https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-14-pro-model-unselect-gallery-1-202209?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1660753619946"
        ]);



    }



}
