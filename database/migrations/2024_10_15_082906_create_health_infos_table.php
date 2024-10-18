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
        Schema::create('health_infos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('img')->nullable();
            $table->boolean('status')->default(false);
            $table->boolean('featured')->default(false);
            $table->longText('description')->charset('binary')->nullable();
            $table->longText('chemical_structure')->charset('binary')->nullable();
            $table->longText('characteristics')->charset('binary')->nullable();
            $table->longText('process')->charset('binary')->nullable();
            $table->longText('effect')->charset('binary')->nullable();
            $table->longText('age')->charset('binary')->nullable();
            $table->integer('order')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_infos');
    }
};
