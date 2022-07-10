<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos_eventos', function (Blueprint $table) {
            $table->id();
            $table->string('designação');
            $table->unsignedBigInteger('eventos_id');
            $table->foreign('eventos_id')
                ->references('id')
                ->on('eventos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotos_eventos');
    }
};
