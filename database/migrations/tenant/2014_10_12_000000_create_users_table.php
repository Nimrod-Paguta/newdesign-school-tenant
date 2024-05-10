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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('payment')->nullable();
            $table->string('logo')->nullable();
            $table->string('adminfirstname');
            $table->string('adminmiddlename');
            $table->string('adminlastname');
            $table->string('street');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('city');
            $table->string('gender');
            $table->string('phonenumber');
            $table->string('department_id');

         
            
            $table->rememberToken();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
