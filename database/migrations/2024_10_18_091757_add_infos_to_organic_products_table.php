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
        Schema::table('organic_products', function (Blueprint $table) {
            $table->longText('benefits')->charset('binary')->nullable();
            $table->longText('storage')->charset('binary')->nullable();
            $table->longText('packaging')->charset('binary')->nullable();
            $table->longText('usage')->charset('binary')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('organic_products', function (Blueprint $table) {
            $table->dropColumn('benefits');
            $table->dropColumn('storage');
            $table->dropColumn('packaging');
            $table->dropColumn('usage');
        });
    }
};
