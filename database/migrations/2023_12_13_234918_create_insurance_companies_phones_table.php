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
        Schema::create('insurance_companies_phones', function (Blueprint $table) {
            $table->id('ic_phone_id');
            $table->foreignId('ic_id')->constrained('insurance_companies','ic_id')->cascadeOnDelete();
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ic_phones');
    }
};
