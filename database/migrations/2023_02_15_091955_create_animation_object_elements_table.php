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
        Schema::create('animation_object_elements', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('css_selector')->nullable(false);
            $table->foreignId('animation_object_id')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animation_object_elements');
    }
};
