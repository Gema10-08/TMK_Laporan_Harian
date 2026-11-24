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
    Schema::create('operasional_pompas', function (Blueprint $table) {
        $table->id();
        $table->string('hari', 20); // Contoh: Selasa
        $table->date('tanggal'); //[cite: 5]
        $table->text('kendala')->nullable(); // Catatan kendala operasional[cite: 5]
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operasional_pompas');
    }
};
