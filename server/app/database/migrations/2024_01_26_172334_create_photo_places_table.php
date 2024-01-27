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
        Schema::create('photo_places', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->unsignedBigInteger('place_id')->nullable();
            $table->index('place_id','photo_place_idx');
            $table->foreign('place_id','photo_place_fk')->on('places')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_places');
    }
};
