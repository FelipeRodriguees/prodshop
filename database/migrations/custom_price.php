<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {
    public function up()
    {
        Schema::create('custom_price', function (Blueprint $table) {
            $table->id();
            $table->double('discount');
            $table->timestamp('start_date');
            $table->timestamp('final_date');
            $table->integer('category_id');
            $table->integer('brand_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('custom_price');
    }
};
