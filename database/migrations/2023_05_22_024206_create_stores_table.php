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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',500);
            $table->foreignId('user_id')->constrained('Users');//one to many
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('subcategory_id')->constrained('subcategories')->onDelete('cascade');
            $table->string('image',500);
            $table->string('address')->nullable();
            $table->enum('status',['active','inactive','pending'])->default('pending')->nullable();
            $table->enum('rating',['1','2','3','4','5']);
            $table->string('description')->nullable();
            $table->string('tenant_id')->nullable()->unique();

            $table->enum('thems',['them1','them2','them3'])->default('them2');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
