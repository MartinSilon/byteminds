<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('photo_path');
            $table->text('description')->nullable();
            $table->boolean('description_active')->default(false);
            $table->string('link')->nullable();
            $table->boolean('link_active')->default(false);
            $table->string('size')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('photos');
    }
};
