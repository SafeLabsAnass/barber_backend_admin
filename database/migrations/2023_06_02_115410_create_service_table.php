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
        Schema::create("service", function (Blueprint $table) {
            $table->id("service_id");
            $table->integer("cat_id");
            $table->integer("salon_id");
            $table->string("image", 255);
            $table->string("name", 255);
            $table->integer("time");
            $table->string("gender", 10);
            $table->float("price");
            $table->boolean("status")->default(true);
            $table->boolean("isdelete")->default(false);
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
        Schema::dropIfExists("service");
    }
};
