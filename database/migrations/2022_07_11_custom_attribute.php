<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {
    public function up()
    {
        Schema::create('custom_attribute', function (Blueprint $table) {
            $table->id();
            $table->integer('attribute_id');
            $table->string('key');
            $table->string('value');
        });
    }

    public function down()
    {
        Schema::dropIfExists();
    }
};
