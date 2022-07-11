<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->integer('images_id');
            $table->integer('datasheet_id');
            $table->integer('price_id');
            $table->string('product_name');
            $table->integer('available_quantity');
            $table->string('bar_code');
            $table->string('ean');
            $table->string('description');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product');
    }

};
