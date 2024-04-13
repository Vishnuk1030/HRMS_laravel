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
        Schema::create('job_vacancy', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->longText('job_description');
            $table->string('experience');
            $table->string('location');
            $table->integer('no_of_vacancy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_vacancy');
    }
};
