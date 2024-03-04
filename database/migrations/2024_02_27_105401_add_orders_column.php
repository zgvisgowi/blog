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
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('costumer_id');
            $table->foreign('costumer_id')
                ->references('id')->on('costumer')
                ->onDelete('cascade');
            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')
                ->references('id')->on('addresses')
                ->onDelete('cascade');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
};
