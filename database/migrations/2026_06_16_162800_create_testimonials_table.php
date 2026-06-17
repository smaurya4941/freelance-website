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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('photo')->nullable();
            $table->text('feedback');
            $table->unsignedTinyInteger('rating')->default(5);
            $table->string('project_type')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_hidden')->default(false);
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
