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
        Schema::table('headphones', function (Blueprint $table) {
            $table->dropColumn('img_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('headphones', function (Blueprint $table) {
            $table->string('img_url')->after('company')->nullable();
        });
    }
};