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
        Schema::create('user_prayergroup_details', function (Blueprint $table) {
            $table->id();
            $table->date('creation_date')->nullable();
            $table->string('social_object')->nullable();
            $table->string('adress')->nullable();
            $table->string('responsable_name')->nullable();
            $table->string('responsable_image')->nullable();
            $table->longText('planning')->nullable();
            $table->boolean('give_lesson')->default(false);
            $table->longText('give_lesson_detail')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('dimension_ecc_id')->nullable()->constrained('dimension_eccs')->nullOnDelete();
            $table->foreignId('follower_number_id')->nullable()->constrained('follower_numbers')->nullOnDelete();
            $table->foreignId('order_worship')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_prayergroup_details');
    }
};
