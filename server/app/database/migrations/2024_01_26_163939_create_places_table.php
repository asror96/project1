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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('longitude');
            $table->string('latitude');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id','place_category_idx');
            $table->foreign('category_id','place_category_fk')->on('categories')->references('id');
            $table->float('evaluation');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
