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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->date('event_date');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('alamat');
            $table->string('kota');
            $table->string('gmaps');
            $table->string('image')->nullable();
            $table->string('wagrup');
            $table->integer('volunteer');
            $table->integer('partisipan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
