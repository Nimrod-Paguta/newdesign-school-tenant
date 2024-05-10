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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Student_no');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name')->unique();
            $table->string('department');
            $table->string('email')->nullable();
            $table->string('date_of_birth');
            $table->string('age');
            $table->string('mobile_no');
            $table->string('year');
            $table->string('status')->unique();
            $table->string('street');
            $table->string('barangay')->nullable();
            $table->string('municipality');
            $table->string('province');
            $table->string('gender');
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
