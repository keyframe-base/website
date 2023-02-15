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
        Schema::create('keyframes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('css_name')->nullable(false);
            $table->string('css')->nullable(false);
            $table->foreignId('animation_id')->constrained();
            $table->foreignId('cubic_bezier_function_id')->constrained();
            $table->integer('duration')->nullable(false)->default(400);
            $table->integer('delay')->nullable(false)->default(0);
            $table->boolean('keep_result_after_playing')->nullable(false)->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keyframes');
    }
};
