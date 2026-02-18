<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // Basic Info
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('image');
            $table->decimal('price', 12, 2);
            $table->string('category');
            $table->string('brand')->nullable();
            $table->string('stock_status')->default('Available');

            // Detailed Specifications
            $table->string('display')->nullable();
            $table->string('power')->nullable();
            $table->string('connectivity')->nullable();
            $table->string('measurement_range')->nullable();
            $table->string('accuracy')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
