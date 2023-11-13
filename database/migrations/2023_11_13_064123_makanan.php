<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("makanan", function (Blueprint $table) {
            $table->id();
            $table->longText("gambar");
            $table->string("nama");
            $table->string("harga");
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
        Schema::dropIfExists('makanan');
    }
};
