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
            $table->unsignedBigInteger('country_id')->nullable();
            $table->index('country_id','country_place_idx');
            $table->foreign('country_id','country_place_fk')->on('countries')->references('id');
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
