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
        'stock_status' => 'Available',

        'display' => 'LCD Screen',
        'power' => 'AAA Battery',
        'connectivity' => 'None',
        'measurement_range' => '32°C – 42°C',
        'accuracy' => '±0.1°C'
    ]);

    }
}