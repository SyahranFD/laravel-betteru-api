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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('kalori');
            $table->double('protein');
            $table->double('lemak');
            $table->double('karbohidrat');
            $table->text('note')->nullable();
            $table->text('imageUrl')->nullable();
            $table->text('videoUrl')->nullable();
            $table->integer('time')->nullable();
            $table->string('goals')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
