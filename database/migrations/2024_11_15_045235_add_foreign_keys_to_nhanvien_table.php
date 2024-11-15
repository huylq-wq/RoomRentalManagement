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
        Schema::table('nhanvien', function (Blueprint $table) {
            $table->foreign(['MaCoSo'], 'FK_NhanVien_CoSo')->references(['MaCoSo'])->on('coso')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nhanvien', function (Blueprint $table) {
            $table->dropForeign('FK_NhanVien_CoSo');
        });
    }
};
