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
        Schema::create('db_category', function (Blueprint $table) {
            $table->id();
            $table->string('name', 1000);
            $table->string('slug', 1000);
            $table->unsignedInteger('parentid');
            $table->unsignedInteger('sort_orders');
            $table->string('image', 1000);
            $table->string('metakey', 255);
            $table->string('metadesc', 255);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->unsignedInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttt_category');
    }
};