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
        Schema::create('phongtro', function (Blueprint $table) {
            $table->string('MaPhong', 10)->primary();
            $table->string('MaCoSo', 10)->nullable()->index('fk_phongtro_coso');
            $table->string('TenPhong', 50);
            $table->float('DienTich');
            $table->decimal('GiaThue', 10);
            $table->string('TrangThai', 20)->default('Trống');
            $table->string('MoTa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phongtro');
    }
};
