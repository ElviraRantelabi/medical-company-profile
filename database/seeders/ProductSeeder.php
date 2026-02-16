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
        Product::create([
            'name' => 'Digital Thermometer',
            'slug' => 'digital-thermometer',
            'description' => 'Alat pengukur suhu tubuh digital akurat.',
            'image' => 'thermometer.jpg',
            'price' => 75000,
            'category' => 'Medical Device',
            'brand' => 'Omron',
            'stock_status' => 'Available'
        ]);

        Product::create([
            'name' => 'Tensimeter Digital',
            'slug' => 'tensimeter-digital',
            'description' => 'Alat pengukur tekanan darah otomatis.',
            'image' => 'tensimeter.jpg',
            'price' => 350000,
            'category' => 'Medical Device',
            'brand' => 'Beurer',
            'stock_status' => 'Available'
        ]);
    }
}