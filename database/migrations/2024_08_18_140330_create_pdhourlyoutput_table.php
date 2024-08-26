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
        Schema::create('pdhourlyoutput', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('time')->nullable();
            $table->string('target')->nullable();
            $table->string('output')->nullable();
            $table->string('accm')->nullable();
            $table->string('date')->nullable();
            $table->string('process')->nullable();
            $table->string('shift')->nullable();
            $table->string('lot')->nullable();
            $table->text('deskription')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdhourlyoutput');
    }
};
