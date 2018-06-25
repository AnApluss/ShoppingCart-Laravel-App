<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagepath' => 'http://127.0.0.1:8000/images/item7.jpg',
        	'title' => 'Versace T-Shirt',
        	'description' => 'Short sleeve, all kind of color and size',
        	'price' => 20
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagepath' => 'http://127.0.0.1:8000/images/item8.jpg',
        	'title' => 'LV T-Shirt',
        	'description' => 'Short sleeve, all kind of color and size',
        	'price' => 18
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagepath' => 'http://127.0.0.1:8000/images/item5.jpg',
        	'title' => 'G&B T-Shirt',
        	'description' => 'Short sleeve and round neck, medium',
        	'price' => 17
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagepath' => 'http://127.0.0.1:8000/images/item1.jpg',
        	'title' => 'ORAL-B mouthwash',
        	'description' => 'Remove all sort of teeth dent and provide fresh breath',
        	'price' => 5
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagepath' => 'http://127.0.0.1:8000/images/item6.jpg',
        	'title' => 'Simley T-Shirt',
        	'description' => 'Short sleeve and round neck, medium',
        	'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagepath' => 'http://127.0.0.1:8000/images/item9.jpg',
        	'title' => 'Courtney T-Shirt',
        	'description' => 'Short sleeve and round neck, medium',
        	'price' => 10
        ]);
        $product->save();
    }
}
