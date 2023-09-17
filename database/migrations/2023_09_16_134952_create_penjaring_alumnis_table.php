<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjaring_alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jenis_kelamin');
            $table->string('program_studi')->nullable();
            $table->string('fakultas')->nullable();
            $table->string('nim')->unique();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tempat_kerja')->nullable();
            $table->string('alamat_kerja')->nullable();
            $table->string('posisi')->nullable();
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
        Schema::dropIfExists('penjaring_alumnis');
    }
};