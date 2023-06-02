<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("language", function (Blueprint $table) {
            $table->id();
            $table->string("name", 255)->nullable();
            $table->string("file", 255)->nullable();
            $table->string("image", 255)->nullable();
            $table->string("direction", 255)->nullable();
            $table->boolean("status")->default(true);
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
        Schema::dropIfExists("language");
    }
};
