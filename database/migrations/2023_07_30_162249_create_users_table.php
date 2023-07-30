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
            $table->string('first_name')->required();
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone_number')->unique()->required();
            $table->string('identification_number')->unique()->required();
            $table->enum('gender', ["male","female","other"])->required();
            $table->date('date_of_birth')->required();
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('street_address')->required();
            $table->integer('zipcode');
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
