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
        Schema::create('tim_clan', function (Blueprint $table) {
            $table->unsignedBigInteger('tim_id');
            $table->unsignedBigInteger('clan_id');

            
            $table->primary(['tim_id', 'clan_id']);

            
            $table->foreign('tim_id')->references('id')->on('timovi')->onDelete('cascade');
            $table->foreign('clan_id')->references('id')->on('clanovi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tim_clan');
    }
};
