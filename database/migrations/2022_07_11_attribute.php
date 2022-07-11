<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {
    public function up()
    {
        Schema::create('attribute', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('custom_attribute');
            $table->integer('type');
        });
    }

    public function down()
    {
        Schema::dropIfExists('attribute');
    }
};
