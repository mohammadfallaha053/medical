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
        Schema::create('insurance_companies_patients', function (Blueprint $table) {
            $table->id('icp_id');
            $table->foreignId('ic_id')->constrained('insurance_companies','ic_id');
            $table->foreignId('p_id')->constrained('patients','p_id');
            $table->date('register_date')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ic_patients');
    }
};
