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
        Schema::create("paymentsetting", function (Blueprint $table) {
            $table->id();
            $table->tinyInteger("cod");
            $table->tinyInteger("stripe");
            $table->string("stripe_public_key", 255)->nullable();
            $table->string("stripe_secret_key", 255)->nullable();
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
        Schema::dropIfExists("paymentsetting");
    }
};
