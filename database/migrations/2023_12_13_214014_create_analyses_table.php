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
        Schema::create('analyses', function (Blueprint $table) {
            $table->id('a_id');
            $table->foreignId('g_id')->constrained('groups','g_id');
            $table->foreignId('c_id')->constrained('categories','c_id');
            $table->string('name')->nullable();
            $table->unsignedInteger('n_units')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analyses');
    }
};
