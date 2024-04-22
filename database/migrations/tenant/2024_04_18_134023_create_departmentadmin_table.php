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
        Schema::create('departmentadmin', function (Blueprint $table) {
            $table->id();
            $table->string('departmentadmin');
            $table->string('email');
            $table->string('password');
            $table->string('depadminfirstname');
            $table->string('depadminmiddlename');
            $table->string('depadminlastname');
            $table->string('street');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('city');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departmentadmin');
    }
};
