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
        Schema::create(table: 'programs', callback: function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'school_id')->constrained()->onDelete(action: 'cascade'); // Foreign key to schools
            $table->string(column: 'name');
            $table->text(column: 'description')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'programs');
    }
};
