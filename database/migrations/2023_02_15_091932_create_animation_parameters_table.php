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
        Schema::create('animation_parameters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parameter_id')->constrained();
            $table->foreignId('animation_id')->constrained();
            $table->double('value')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animation_parameters');
    }
};
