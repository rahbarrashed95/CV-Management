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
        Schema::create('country_visas', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200)->nullable();
            $table->string('bottom_title', 200)->nullable();
            $table->string('country', 200)->nullable();
            $table->text('description', 200)->nullable();
            $table->string('flag', 200)->nullable();
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country_visas');
    }
};
