<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('customers', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique()->nullable();
        $table->string('document_type')->nullable(); // DNI, CI, etc
        $table->string('document_number')->nullable();
        $table->date('birthdate')->nullable();
        $table->string('phone')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
