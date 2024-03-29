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
        Schema::create('meters', function (Blueprint $table) {
            $table->id();
            $table->string('tipo'); //producto, categoria, principal, busqueda
            $table->string('products_id')->nullable(); // El id del producto o categoria buscada si es principalo busqueda queda en
            $table->string('category_id')->nullable(); // El id del producto o categoria buscada si es principalo busqueda queda en
            $table->text('url'); // Url consultada
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meters');
    }
};
