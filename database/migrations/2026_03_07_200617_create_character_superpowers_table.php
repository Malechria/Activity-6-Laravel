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
    Schema::create('character_superpowers', function (Blueprint $table) {
        // Conectamos con las tablas usando foreignId
        $table->foreignId('character_id')->constrained('characters');
        $table->foreignId('superpower_id')->constrained('superpowers');
        
        $table->primary(['character_id', 'superpower_id']);
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_superpowers');
    }
};
