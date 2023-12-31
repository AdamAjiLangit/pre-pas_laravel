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
        Schema::create('starbucks', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->integer("harga");
            $table->longText("deskripsi");
            $table->longText("rasa");
            $table->date("expired");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('starbucks');
    }
};
