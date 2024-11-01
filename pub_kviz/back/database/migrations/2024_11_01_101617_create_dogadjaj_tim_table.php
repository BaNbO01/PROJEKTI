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
            $table->id();
            $table->foreignId('dogadjaj_id')->constrained("dogadjaji")->onDelete('cascade');
            $table->foreignId('tim_id')->constrained("timovi")->onDelete('cascade');
            $table->integer('score')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dogadjaj_tim');
    }
};
