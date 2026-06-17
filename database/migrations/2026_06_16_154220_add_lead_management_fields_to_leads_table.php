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
        Schema::table('leads', function (Blueprint $table) {
            $table->string('priority')->default('Medium')->after('status');
            $table->string('source')->default('Contact Form')->after('priority');
            $table->string('original_file_name')->nullable()->after('file_path');
            $table->string('file_type')->nullable()->after('original_file_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropColumn(['priority', 'source', 'original_file_name', 'file_type']);
        });
    }
};
