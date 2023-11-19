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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userid_agent')->unsigned()->index()->nullable();
            $table->foreign('userid_agent')->references('id')->on('users'); 
            $table->string('property_name');
            $table->string('description');
            $table->string('price');
            $table->string('lifestyle');
            $table->string('type');
            $table->string('location_city');
            $table->string('location_subcity');
            $table->string('property_lifestyle');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('areasize');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};