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
        Schema::create('tac_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('img_page')->nullable();
            $table->string('section')->nullable();
            $table->longText('description1')->nullable()->charset('binary');
            $table->longText('description2')->nullable()->charset('binary');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tac_pages');
    }
};
