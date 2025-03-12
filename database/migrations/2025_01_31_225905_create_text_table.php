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
        Schema::create('text', function (Blueprint $table) {
            $table->id();
            $table->text('text1');
            $table->integer('text1_rows');
            $table->text('text2')->nullable();
            $table->integer('text2_rows')->nullable();;
            $table->boolean('text2_active')->nullable();
            $table->text('text3')->nullable();
            $table->integer('text3_rows')->nullable();;
            $table->boolean('text3_active')->nullable();;
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('text');
    }
};
