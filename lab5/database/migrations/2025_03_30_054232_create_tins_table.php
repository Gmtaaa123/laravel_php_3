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
        Schema::create('tins', function (Blueprint $table) {
            $table->id();
            $table->string('tieuDe');
            $table->text('hinhAnh');
            $table->timestamp('ngayDang');
            $table->string('urlHinh');
            $table->integer('idDM');
            $table->integer('view');
            $table->integer('noiBat');
            $table->integer('anHien');
            $table->string('tags');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tins');
    }
};
