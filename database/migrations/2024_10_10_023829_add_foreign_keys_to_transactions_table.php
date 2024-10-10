<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            // Add foreign keys for product_id and company_id
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            // Drop the foreign keys if they exist
            $table->dropForeign(['product_id']);
            $table->dropForeign(['company_id']);
        });
    }
}
