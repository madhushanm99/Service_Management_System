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
        Schema::table('item', function (Blueprint $table) {
            if (!Schema::hasColumn('item', 'reorder_level')) {
                $table->integer('reorder_level')->default(0)->after('units');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('item', function (Blueprint $table) {
            if (Schema::hasColumn('item', 'reorder_level')) {
                $table->dropColumn('reorder_level');
            }
        });
    }
};


