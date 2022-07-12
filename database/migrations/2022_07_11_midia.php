<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {
    public function up()
    {
        Schema::create('midia', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('url');
        });

    }

    public function down()
    {
        Schema::dropIfExists('midia');
    }
};
