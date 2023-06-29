<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('picture')->nullable();
            $table->integer('price');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('institution_id');
            $table->unsignedBigInteger('kitchen_id');
            $table->unsignedBigInteger('type_id');
            $table->timestamps();

            $table->foreign('kitchen_id')
                ->references('id')
                ->on('kitchens')
                ->onDelete('cascade');

            $table->foreign('type_id')
                ->references('id')
                ->on('dish_types')
                ->onDelete('cascade');

            $table->foreign('institution_id')
                ->references('id')
                ->on('institutions')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};
