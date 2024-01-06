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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('code',30)->unique();
            $table->string('duration');
            $table->text('description')->nullable();
            $table->integer('price');
            $table->text('hotelcondition');
            $table->text('transportcondition');
            $table->text('spotnames');
            $table->string('image')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
