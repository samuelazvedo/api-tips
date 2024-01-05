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
<<<<<<< Updated upstream:api/database/migrations/2014_10_12_000000_create_users_table.php
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
=======
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('status', ['pending', 'ongoing', 'completed'])->default('pending');
>>>>>>> Stashed changes:api/database/migrations/2024_01_04_222027_create_tasks_table.php
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
