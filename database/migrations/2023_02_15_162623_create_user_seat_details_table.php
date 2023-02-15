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
        Schema::create('user_seat_details', function (Blueprint $table) {
            $table->id();
            $table->string('adress')->nullable();
            $table->string('email_adress_2')->nullable();
            $table->longText('planning')->nullable();
            $table->string('pastor')->nullable();
            $table->string('pastor_image')->nullable();
            $table->string('trustee_member_1')->nullable();
            $table->string('trustee_member_1_image')->nullable();
            $table->string('trustee_member_2')->nullable();
            $table->string('trustee_member_2_image')->nullable();
            $table->string('trustee_member_3')->nullable();
            $table->string('trustee_member_3_image')->nullable();
            $table->string('trustee_member_4')->nullable();
            $table->string('trustee_member_4_image')->nullable();
            $table->string('trustee_member_5')->nullable();
            $table->string('trustee_member_5_image')->nullable();
            $table->string('trustee_member_6')->nullable();
            $table->string('trustee_member_6_image')->nullable();
            $table->string('trustee_member_7')->nullable();
            $table->string('trustee_member_7_image')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_seat_details');
    }
};
