<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FlashSaleProduct;
use App\Models\Product;
use Faker\Factory as Faker;

class FlashSaleProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Kosongkan tabel flash_sale_products sebelum menambahkan data baru
        FlashSaleProduct::truncate();

        // Ambil beberapa produk acak dari tabel products
        $faker = Faker::create();
        $products = Product::inRandomOrder()->take(10)->get();

        // Loop untuk menambahkan data dummy ke flash_sale_products
        foreach ($products as $product) {
            FlashSaleProduct::create([
                'name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'discount_price' => $product->price - ($product->price * $product->discount_percentage / 100),
                'image' => $product->image,
                'category' => $product->category,
                // tambahkan kolom lain yang perlu diperbarui
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $this->command->info('Flash sale products seeded successfully.');
    }
}
