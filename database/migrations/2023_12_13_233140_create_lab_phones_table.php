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
        Schema::create('lab_phones', function (Blueprint $table) {
            $table->id('lab_phone_id');
            $table->foreignId('lc_id')->constrained('laboratory_constants','lc_id')->cascadeOnDelete();
            $table->string('phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_phones');
    }
};
