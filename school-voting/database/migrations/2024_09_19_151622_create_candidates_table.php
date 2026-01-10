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
        Schema::create('candidates', function (Blueprint $table) {
		$table->id();
		$table->enum('candidate_status',['approved','flagged','disqualified','review'])->default('review');
		$table->foreignId('user_id')->constrained('users');
		//should i use join operations for position table?
		$table->string('position');
		$table->string('profile_image_path');
		$table->string('slogan');
		$table->string('party');
		$table->bigInteger('votes')->default(0);

		$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
