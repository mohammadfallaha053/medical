<?php

use App\Models\Patient;
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
        Schema::create('tests', function (Blueprint $table) {
            $table->id('t_id');
//            $table->foreignIdFor(Patient::class)->constrained();
            $table->foreignId('p_id')->constrained('patients','p_id');
            $table->foreignId('d_id')->constrained('doctors','d_id');
            $table->foreignId('u_id')->constrained('users','u_id');
            $table->foreignId('ic_id')->constrained('insurance_companies','ic_id');
            $table->timestamps();
            $table->unsignedDecimal('discount')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
