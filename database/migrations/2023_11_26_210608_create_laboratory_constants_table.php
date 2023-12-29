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
        Schema::create('laboratory_constants', function (Blueprint $table) {
            $table->id('lc_id');
            $table->string('lab_name')->nullable();
            $table->string('logo_image')->nullable();
            $table->string('address')->nullable();
            $table->string('hospital_name')->nullable();
            $table->string('email')->unique();
            $table->unsignedDecimal('price_of_unit')->nullable();
            $table->string('mange_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laboratory_constants');
    }
};
