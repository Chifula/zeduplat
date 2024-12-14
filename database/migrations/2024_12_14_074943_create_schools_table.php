<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(table: 'schools', callback: function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name');
            $table->string(column: 'icon')->nullable(); // Optional for storing icon URLs or paths
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'schools');
    }
};
