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
        Schema::create('activitymodels', function (Blueprint $table) {
            $table->id();
            $table->string('Activity_name');
            $table->date("start_date");
            $table->date("end_date");
            $table->string('Location');
            $table->string('Expense_category');
            $table->string('Amount');
            $table->string('Payment_method');
            $table->string('Notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activitymodels');
    }
};
