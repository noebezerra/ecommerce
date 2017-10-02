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
          'imagePath' => 'https://s3-us-west-2.amazonaws.com/cdn.sushiinkasa/upload/prd_foto_147611160857fbacf8a7410.jpg',
          'title' => 'HOT - Roll Tradicional',
          'description' => 'O melhor sushi hot da ilha! Saboreie e nunca mais esqueça seu gosto',
          'price' => 10.90
        ]);
        $product->save();
    }
}
