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
        Schema::create('test_details', function (Blueprint $table) {
                $table->id('td_id');
            $table->foreignId('t_id')->constrained('tests','t_id');
            $table->foreignId('a_id')->constrained('analyses','a_id');
            $table->string('result')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_details');
    }
};
