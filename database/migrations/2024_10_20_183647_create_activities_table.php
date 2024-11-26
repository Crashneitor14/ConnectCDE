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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status',['En Proceso', 'Terminado']);
            //rendiciones
            $table->string('name_rend');
            $table->integer('monto')->nullable();
            $table->enum('tipo_rend',['DDE', 'Externo']);
            $table->string('imagen')->nullable();
            //
            $table->timestamp('date_start')->nullable();
            $table->timestamp('date_end')->nullable();
            $table->longText('observation');
            $table->string('user_charge')->nullable();
            $table->string('carrera_user')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
