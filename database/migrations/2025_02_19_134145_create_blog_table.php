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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('text1');
            $table->text('text2')->nullable();
            $table->text('text3')->nullable();
            $table->string('miniature_path');
            $table->string('header_path');
            $table->string('path1');
            $table->string('path1_description')->nullable();
            $table->string('path2')->nullable();
            $table->string('path2_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
