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
        Schema::create('user_diocese_details', function (Blueprint $table) {
            $table->id();
            $table->date('diocese_feast')->nullable();
            $table->string('responsable_name')->nullable();
            $table->string('responsable_image')->nullable();
            $table->string('secretary_name')->nullable();
            $table->string('secretary_image')->nullable();
            $table->string('cdn_president')->nullable();
            $table->string('cdn_president_image')->nullable();
            $table->string('adress')->nullable();
            $table->longText('planning')->nullable();
            $table->longText('training_niche')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('associate_seat')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_diocese_details');
    }
};
