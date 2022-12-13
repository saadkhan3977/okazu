<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('product_sku')->nullable();
            $table->string('category_id')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('child_id')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('title')->nullable();
            $table->string('model')->nullable();
            // $table->text('tags');
            $table->longText('short_description')->nullable();
            $table->longText('product_description')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->string('image_6')->nullable();
            $table->string('color_check')->nullable();
            $table->string('colors')->nullable();
            $table->string('size_chart')->nullable();
            $table->string('size_check')->nullable();
            $table->string('size_name')->nullable();
            $table->string('size_qty')->nullable();
            
            $table->string('price')->nullable();
            $table->string('sale_status')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('sale_details')->nullable();
            // $table->string('sale_start')->nullable();
            // $table->string('sale_start_time')->nullable();
            // $table->string('sale_end')->nullable();
            // $table->string('sale_end_time')->nullable();
            $table->string('quantity')->nullable();
            $table->string('condition')->nullable();
            $table->longText('additional_details')->nullable();
            $table->string('warrenty_type')->nullable();
            $table->string('warrenty_period')->nullable();
            $table->text('warrenty_policy')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('products');
    }
}
