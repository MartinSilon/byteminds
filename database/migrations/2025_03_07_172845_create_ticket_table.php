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
        Schema::create('ticket_status', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('color');
            $table->timestamps();
        });

        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->foreignId('employee_id');
            $table->string('name');
            $table->unsignedBigInteger('status_id');
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('ticket_status')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employers')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
        Schema::dropIfExists('ticket_status');
    }
};
