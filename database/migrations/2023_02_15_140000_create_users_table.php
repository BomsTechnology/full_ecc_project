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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->enum('user_type', ['faithful', 'prayerGroup', 'parish', 'diocese', 'seat', 'admin']);
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('banner')->nullable();
            $table->boolean('confirmed')->default(false);
            $table->boolean('blocked')->default(false);
            $table->boolean('parish_official')->default(false);
            $table->boolean('hide_email')->default(false);
            $table->boolean('hide_phone')->default(false);
            $table->string('phone_number')->nullable();
            $table->string('phone_number_2')->nullable();
            $table->string('website')->nullable();
            $table->string('youtube')->nullable();
            $table->foreignId('continent_id')->nullable()->constrained('continents')->nullOnDelete();
            $table->foreignId('zoned_id')->nullable()->constrained('zoneds')->nullOnDelete();
            $table->foreignId('country_id')->nullable()->constrained('countries')->nullOnDelete();
            $table->foreignId('city_id')->nullable()->constrained('cities')->nullOnDelete();
            $table->foreignId('department_id')->nullable()->constrained('departments')->nullOnDelete();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
