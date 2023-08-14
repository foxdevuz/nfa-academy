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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('desc');
            $table->text('file_1')->nullable();
            $table->text('file_2')->nullable();
            $table->text('file_3')->nullable();
            $table->text('file_4')->nullable();
            $table->text('file_5')->nullable();
            $table->text('file_6')->nullable();
            $table->text('file_7')->nullable();
            $table->text('file_8')->nullable();
            $table->text('file_9')->nullable();
            $table->text('file_10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
