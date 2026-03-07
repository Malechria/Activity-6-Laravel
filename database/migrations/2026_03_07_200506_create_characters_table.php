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
    Schema::create('characters', function (Blueprint $table) {
        $table->id();
        $table->string('name', 100);
        $table->string('real_name', 100);
        $table->string('gender', 20);
        
        // Forma moderna de Laravel para conectar llaves foráneas:
        $table->foreignId('universe_id')->constrained('universes');
        
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
