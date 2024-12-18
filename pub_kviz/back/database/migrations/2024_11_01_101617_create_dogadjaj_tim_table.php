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
        Schema::create('dogadjaj_tim', function (Blueprint $table) {
            $table->unsignedBigInteger('dogadjaj_id');
            $table->unsignedBigInteger('tim_id');
            $table->integer('score')->default(0);
            $table->timestamps();
            $table->primary(['dogadjaj_id', 'tim_id']);
            $table->foreign('dogadjaj_id')->references('id')->on('dogadjaji')->onDelete('cascade');
            $table->foreign('tim_id')->references('id')->on('timovi')->onDelete('cascade');
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('dogadjaj_tim');
    }
};
