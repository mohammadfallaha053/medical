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
        Schema::create('natural_fields', function (Blueprint $table) {
            $table->id('nf_id');
            $table->foreignId('a_id')->constrained('analyses','a_id');
            $table->unsignedDecimal('max')->nullable();
            $table->unsignedDecimal('min')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('natural_fields');
    }
};
