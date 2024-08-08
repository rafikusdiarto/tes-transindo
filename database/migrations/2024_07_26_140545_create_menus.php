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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('merchant_id');
            $table->unsignedBigInteger('menu_category_id');
            $table->string('title');
            $table->string('img');
            $table->integer('price');
            $table->integer('stock');
            $table->text('description');
            $table->timestamps();
            $table->foreign('merchant_id')->references('id')->on('users');
            $table->foreign('menu_category_id')->references('id')->on('menu_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
