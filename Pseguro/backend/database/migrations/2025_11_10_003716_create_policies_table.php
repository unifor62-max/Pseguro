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
    Schema::create('policies', function (Blueprint $table) {
        $table->id();
        $table->string('policy_number')->unique();
        $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
        $table->string('plan')->nullable();
        $table->decimal('sum_assured', 12, 2)->default(0);
        $table->decimal('premium', 10, 2)->default(0);
        $table->date('start_date')->nullable();
        $table->date('end_date')->nullable();
        $table->string('status')->default('active');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policies');
    }
};
