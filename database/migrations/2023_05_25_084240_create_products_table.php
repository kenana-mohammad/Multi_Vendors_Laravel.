<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('ProductCategoryId')->constrained('product_categories')->onDelete('cascade');
            $table->enum('status', ['available', 'unavailable'])->default('available');
            $table->string('photo')->nullable();
            $table->string('photoslider')->nullable();
            $table->text('description');
            $table->double('price');
            $table->boolean('hasoffer')->default(false);
            $table->double('discount')->nullable();
            $table->timestamp('Expdate')->useCurrent();
          

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
