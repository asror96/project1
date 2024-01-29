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
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->index('user_id','favorite_user_idx');
            $table->foreign('user_id','favorite_user_fk')->on('users')->references('id');

            $table->unsignedBigInteger('place_id')->nullable();
            $table->index('place_id','favorite_place_idx');
            $table->foreign('place_id','favorite_place_fk')->on('places')->references('id');

            $table->date('travel_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
