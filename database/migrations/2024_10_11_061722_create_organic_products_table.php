<?php

use App\Models\Brand;
use App\Models\User;
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
        Schema::create('organic_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('product_img')->nullable();
            $table->foreignIdFor(User::class);
            $table->boolean('status')->default(false);
            $table->boolean('featured')->default(false);
            $table->longText('description')->charset('binary')->nullable();
            $table->longText('features')->charset('binary')->nullable();
            $table->longText('technical_specs')->charset('binary')->nullable();
            $table->string('categories')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->foreignIdFor(Brand::class);
            $table->longText('benefits')->charset('binary')->nullable();
            $table->longText('storage')->charset('binary')->nullable();
            $table->longText('packaging')->charset('binary')->nullable();
            $table->longText('usage')->charset('binary')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organic_products');
    }
};
