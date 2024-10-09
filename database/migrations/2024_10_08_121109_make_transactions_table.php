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
        //
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'company_id');
            $table->unsignedBigInteger(column: 'product_id');
            $table->decimal('total')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the 'transactions' table if it exists
        Schema::dropIfExists('transactions');
    }
};
