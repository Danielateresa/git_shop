<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {

            $product = new Product();
            $product->name = $faker->word(3, true);
            $product->slug = Str::slug($product->name, '-');
            $product->description = $faker->sentence(3);
            $product->price = $faker->randomFloat(2, 1, 150);
            $product->image = $faker->imageUrl(640, 480, true);
            $product->save();
        }
    }
}
