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
        Schema::create('cubic_bezier_functions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('x1')->nullable(false);
            $table->double('y1')->nullable(false);
            $table->double('x2')->nullable(false);
            $table->double('y2')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cubic_bezier_functions');
    }
};
