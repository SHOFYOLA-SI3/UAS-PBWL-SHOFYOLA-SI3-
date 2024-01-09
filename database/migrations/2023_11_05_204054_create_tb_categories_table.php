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
        Schema::create('tb_categories', function (Blueprint $table) {
            $table->increments('id_buku');
            $table->string('judul_buku');
            $table->string('pengarang_buku');
            $table->string('kategori_buku')->insert([
                ['name' => 'Fiksi'],
                ['name' => 'Non-Fiksi'],
                ['name' => 'Sejarah'],
                ['name' => 'teknologi'],
                ['name' => 'Sains'],
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_categories');
    }
};
