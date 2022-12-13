<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->nullable();
            $table->string('slug')->nullable();
            $table->string('category_image_en')->nullable();
            $table->string('category_icon_en')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('category_image_ar')->nullable();
            $table->string('category_icon_ar')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
