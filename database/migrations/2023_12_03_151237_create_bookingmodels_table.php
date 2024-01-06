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
        Schema::create('bookingmodels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('tourist_id');
            $table->string('email');
            $table->integer('number');
            $table->string('image')->nullable();
            $table->text('address');
            $table->date('pickupdate');
            $table->string('code',30);
            $table->string('chooseroom');
            $table->string('choosefoodmenu');
            $table->integer('quantity');
            $table->double('amount');
            $table->string('payment_status');
            $table->string('transaction_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookingmodels');
    }
};
