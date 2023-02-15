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
        Schema::create('user_parish_details', function (Blueprint $table) {
            $table->id();
            $table->date('creation_date')->nullable();
            $table->date('haverst_festival_date')->nullable();
            $table->string('adress')->nullable();
            $table->string('responsable_name')->nullable();
            $table->string('responsable_image')->nullable();
            $table->longText('planning')->nullable();
            $table->boolean('give_lesson')->default(false);
            $table->longText('give_lesson_detail')->nullable();
            $table->string('woman_parish')->nullable();
            $table->string('woman_parish_image')->nullable();
            $table->string('committe_president')->nullable();
            $table->string('committe_president_image')->nullable();
            $table->string('visionarie_leader')->nullable();
            $table->string('visionarie_leader_image')->nullable();
            $table->string('choir_master')->nullable();
            $table->string('choir_master_image')->nullable();
            $table->string('training_responsable')->nullable();
            $table->string('training_responsable_image')->nullable();
            $table->string('sacristain')->nullable();
            $table->string('sacristain_image')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('follower_number_id')->nullable()->constrained('follower_numbers')->nullOnDelete();
            $table->foreignId('order_worship')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('associate_seat')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('dimension_ecc_id')->nullable()->constrained('dimension_eccs')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_parish_details');
    }
};
