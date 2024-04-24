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
        Schema::create('headphones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('price');
            $table->string('type');
            $table->string('type_connect')->default('wireless');
            $table->string('color');
            $table->string('company');
            $table->string('img_url');
            $table->timestamps();

            $table->softDeletes();

            $table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id', 'headphone_category_idx');

            $table->foreign('category_id', 'headphone_category_fk')->on('categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headphones');
    }
};
