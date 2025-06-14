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
          Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('nomeTarefa');
            $table->date('dataTermino')->nullable();
            $table->string('descricao');
            $table->boolean('deletada')->default('0');
            $table->boolean('finalizada')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
