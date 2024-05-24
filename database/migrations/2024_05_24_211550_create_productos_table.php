<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
                 $table->id();
                $table->integer('precio');
                $table->string('descripcion');
                $table->integer('codigo')->unique();
                $table->string('existencias');

                $table->unsignedBigInteger('provedor_id');
                $table->foreign('provedor_id')->references('id')
                ->on('provedors')
                ->onDelete('cascade');
                $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};