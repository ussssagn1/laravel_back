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
        Schema::create('headphone_tags', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('headphone_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('headphone_id', 'headphone_tag_headphone_idx');
            $table->index('tag_id', 'headphone_tag_tag_idx');

            $table->foreign('headphone_id', 'headphone_tag_headphone_fk')->on('headphones')->references('id');
            $table->foreign('tag_id', 'headphone_tag_tag_fk')->on('tags')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headphone_tags');
    }
};
