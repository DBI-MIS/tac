<?php

use App\Models\OrganicCategory;
use App\Models\OrganicProduct;
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
        Schema::create('organic_products_pivot', function (Blueprint $table) {
         
            $table->id();
            $table->foreignIdFor(OrganicProduct::class);
            $table->foreignIdFor(OrganicCategory::class);
            $table->timestamps();
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organic_products_pivot');
    }
};
