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
        // Files table
        Schema::create('files', function (Blueprint $table) {
            $table->id('fileId');
            $table->string('fileName');
            $table->string('pathToFile');
            $table->string('categoryId');
            $table->timestamps();
        });

        // Categories table
        Schema::create('categories', function (Blueprint $table) {
            $table->id('categoryId');
            $table->string('categoryName');
        });

        // subCategories table
        Schema::create('subCategories', function (Blueprint $table) {
            $table->id('subCategoryId');
            $table->string('subCategoryName');
        });

        Schema::create('category_has_sub', function (Blueprint $table) {
            $table->unsignedBigInteger('categoryId');
            $table->unsignedBigInteger('subCategoryId');

            $table->foreign('categoryId')->references('categoryId')->on('categories');
            $table->foreign('subCategoryId')->references('subCategoryId')->on('subCategories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');

        Schema::dropIfExists('categories');

        Schema::dropIfExists('subCategories');

        Schema::dropIfExists('category_has_sub');
    }
};
