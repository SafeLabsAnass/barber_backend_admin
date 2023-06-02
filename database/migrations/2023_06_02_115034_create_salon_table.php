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
        Schema::create("salon", function (Blueprint $table) {
            $table->id("salon_id");
            $table->integer("owner_id");
            $table->string("name", 255);
            $table->string("image", 255);
            $table->string("logo", 255);
            $table->longText("desc");
            $table->string("gender", 10);
            $table->text("address");
            $table->mediumInteger("zipcode");
            $table->string("city", 255);
            $table->string("state", 255);
            $table->string("country", 255);
            $table->string("website", 255)->nullable();
            $table->bigInteger("phone");
            $table->boolean("status")->default(true);
            $table->string("latitude", 255);
            $table->string("longitude", 255);
            $table->string("start_time", 255);
            $table->string("end_time", 255);
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
        Schema::dropIfExists("salon");
    }
};
