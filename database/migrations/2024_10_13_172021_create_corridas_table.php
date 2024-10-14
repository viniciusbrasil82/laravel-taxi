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
        Schema::create('corridas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('ini_lat');
            $table->float('ini_lng');
            $table->float('end_lat');
            $table->float('end_lng');
            $table->integer('usr_id');
            $table->integer('drv_id');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropIfExists('corridas');
    }
};
