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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique(); // For email addresses, unique
            $table->string('name'); // For the name
            $table->string('birthday'); // For storing birthdays
            $table->string('phone'); // For phone numbers
            $table->string('ip'); // For IP addresses
            $table->string('country'); // For country names
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
