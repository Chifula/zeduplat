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
        Schema::create(table: 'courses', callback: function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'program_id')->constrained()->onDelete(action: 'cascade'); // Foreign key to programs
            $table->string(column: 'name');
            $table->integer(column: 'year')->comment(comment: 'Year of the course'); // Year in the program
            $table->enum(column: 'semester', allowed: [1, 2])->comment(comment: 'Semester of the course'); // Semester (1 or 2)
            $table->text(column: 'description')->nullable(); // Optional course description
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'courses');
    }
};
