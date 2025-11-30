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
        Schema::table('certificates', function (Blueprint $table) {
            // Cek dulu apakah kolom sudah ada atau belum
            if (!Schema::hasColumn('certificates', 'category')) {
                $table->string('category')->default('kepanitiaan')->after('title');
            }
            if (!Schema::hasColumn('certificates', 'image')) {
                $table->string('image')->nullable()->after('icon');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('certificates', function (Blueprint $table) {
            // Cek dulu apakah kolom ada sebelum dihapus
            if (Schema::hasColumn('certificates', 'category')) {
                $table->dropColumn('category');
            }
            if (Schema::hasColumn('certificates', 'image')) {
                $table->dropColumn('image');
            }
        });
    }
};