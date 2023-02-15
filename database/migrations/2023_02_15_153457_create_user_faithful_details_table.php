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
        Schema::create('user_faithful_details', function (Blueprint $table) {
            $table->id();
            $table->date('birthday')->nullable();
            $table->enum('sex', ['male', 'female'])->default('male');
            $table->enum('can_give_lesson', ['none', 'beginner', 'confirmed', 'Expert'])->default('none');
            $table->longText('diploma_certification')->nullable();
            $table->longText('spoken_languages')->nullable();
            $table->longText('other_activity')->nullable();
            $table->longText('search_partner')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('grade_ecc_id')->nullable()->constrained('grade_eccs')->nullOnDelete();
            $table->foreignId('function_ecc_id')->nullable()->constrained('function_eccs')->nullOnDelete();
            $table->foreignId('ministry_ecc_id')->nullable()->constrained('ministry_eccs')->nullOnDelete();
            $table->foreignId('instrument_ecc_id')->nullable()->constrained('instrument_eccs')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_faithful_details');
    }
};
