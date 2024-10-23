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
        Schema::table('user', function (Blueprint $table) { // Ubah ke 'user'
            $table->float('ipk', 3, 2)->nullable()->default(null)->check('ipk <= 4.00');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) { // Ubah ke 'user'
            $table->dropColumn('ipk');
        });
    }
};