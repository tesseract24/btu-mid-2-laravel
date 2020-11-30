<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

        	'name' => 'მესერი ძაღლისთვის დახურული Ferplast DOG-INN 105',
        	'slug' => 'მესერი ძაღლისთვის დახურული Ferplast DOG-INN 105',
        	'details' => 'ძაღლი - სახლები და საწოლები',
        	'price' => '551',
        	'description' => '',
        ]);


        Product::create([

        	'name' => 'აკანა ზრდასრული კატისთვის Bountiful Catch 4.5 კგ',
        	'slug' => 'აკანა ზრდასრული კატისთვის Bountiful Catch 4.5 კგ',
        	'details' => 'კატა - საკვები',
        	'price' => '151',
        	'description' => '',
        ]);


        Product::create([

        	'name' => 'საბელი ძაღლისთვის Ferplast Natural GA 12/200 შავი ფერი',
        	'slug' => 'საბელი ძაღლისთვის Ferplast Natural GA 12/200 შავი ფერი',
        	'details' => 'ძაღლი - საყელოები და საბელები',
        	'price' => '121',
        	'description' => '',
        ]);
    }
}
