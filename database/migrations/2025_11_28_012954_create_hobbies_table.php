<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hobbies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon')->nullable();
            $table->text('description');
            $table->enum('type', ['film', 'recipe', 'gallery', 'text'])->default('text');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hobbies');
    }
};