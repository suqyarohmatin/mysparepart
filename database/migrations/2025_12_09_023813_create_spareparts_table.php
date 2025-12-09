<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('spareparts', function (Blueprint $table) {
        $table->id();
        $table->string('kode_sparepart')->unique();
        $table->string('nama_sparepart');
        $table->string('merk');
        $table->integer('stok');
        $table->integer('harga');
        $table->text('deskripsi')->nullable();
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('spareparts');
    }
};
