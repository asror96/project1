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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('place_id')->nullable();
            $table->index('place_id','evaluation_place_idx');
            $table->foreign('place_id','evaluation_place_fk')->on('places')->references('id');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->index('user_id','evaluation_user_idx');
            $table->foreign('user_id','evaluation_user_fk')->on('users')->references('id');

            $table->text('comments');
            $table->integer('evaluation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
