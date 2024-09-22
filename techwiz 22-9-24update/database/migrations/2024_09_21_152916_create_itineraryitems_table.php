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
        Schema::create('itineraryitems', function (Blueprint $table) {
            $table->id();
            $table->string('Transport');
            $table->string('Lodging');
            $table->string('Activities');
            $table->string('Accommodation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itineraryitems');
    }
};
