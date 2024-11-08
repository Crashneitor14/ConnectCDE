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
        Schema::create('rendicion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('activity_id');
            //$table->foreign('activity_id')->references('id')->on('activity')->onDelete('cascade');
            $table->timestamp('date_ren')->nullable();
            $table->decimal('monto', 8, 2)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendicion');
    }
};
