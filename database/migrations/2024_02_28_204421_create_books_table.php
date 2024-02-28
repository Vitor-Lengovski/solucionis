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
        Schema::create('books', function (Blueprint $table) {
            $table->id('isbn');
            $table->binary('photo');
            $table->string('title', 100);
            $table->integer('pages_number');
            $table->string('language', 50);
            $table->double('price', 7, 2);
            $table->enum('format', ['Capa Dura', 'Espiral', 'Brochura']);
            $table->double('height', 3, 2);
            $table->double('length', 3, 2);
            $table->double('width', 3, 2);
            $table->date('publication_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
