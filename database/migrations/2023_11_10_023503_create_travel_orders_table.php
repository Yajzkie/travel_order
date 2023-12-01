<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('travel_orders', function (Blueprint $table) {
                $table->id(); // Auto-incrementing primary key 'id'
                $table->string('emp');
                $table->string('place');
                $table->date('date');
                $table->string('objective');
                $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_orders');
    }
};
