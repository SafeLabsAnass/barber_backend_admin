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
        Schema::create("review", function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("salon_id");
            $table->integer("booking_id");
            $table->integer("rate");
            $table->longText("message");
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
        Schema::dropIfExists("review");
    }
};
