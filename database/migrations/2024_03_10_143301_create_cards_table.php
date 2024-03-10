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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('set_id')->constrained();
            $table->integer('card_number');
            $table->string('name');
            $table->string('card_type');
            $table->string('subtitle')->nullable();
            $table->integer('cost')->nullable();
            $table->integer('power')->nullable();
            $table->integer('hp')->nullable();
            $table->string('front_text')->nullable();
            $table->boolean('double_sided')->default(false);
            $table->string('rarity')->nullable();
            $table->boolean('unique')->default(false);
            $table->string('artist');
            $table->string('front_art');
            $table->string('back_text')->nullable();
            $table->string('back_art')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
