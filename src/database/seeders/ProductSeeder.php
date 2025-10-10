<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        // Vamos a crear 4 productos de ejemplo
        Product::create([
            'name' => 'Producto 1',
            'short_description' => 'Descripción del producto 1',
            'description' => 'Descripción larga del producto 1',
            'price' => 20.00,
        ]);
        Product::create([
            'name' => 'Producto 2',
            'short_description' => 'Descripción del producto 2',
            'description' => 'Descripción larga del producto 2',
            'price' => 30.00,
        ]);
        Product::create([
            'name' => 'Producto 3',
            'short_description' => 'Descripción del producto 3',
            'description' => 'Descripción larga del producto 3',
            'price' => 40.00,
        ]);
        Product::create([
            'name' => 'Producto 4',
            'short_description' => 'Descripción del producto 4',
            'description' => 'Descripción larga del producto 4',
            'price' => 50.00,
        ]);
    }
}