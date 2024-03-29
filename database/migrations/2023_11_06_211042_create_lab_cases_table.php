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
        Schema::create('lab_cases', function (Blueprint $table) {
            $table->id();
            $table->integer('account_id')->index();
            $table->integer('customer_id')->index();
            $table->integer('user_case_id');
            $table->string('patient_first_name',30);
            $table->string('patient_last_name',30);
            $table->string('pan_number', 5)->nullable();
            $table->float('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_cases');
    }
};
