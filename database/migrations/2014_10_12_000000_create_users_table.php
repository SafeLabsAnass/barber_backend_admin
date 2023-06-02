<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("users", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("image", 255)->default("noimage.jpg");
            $table->string("email")->unique();
            $table->mediumInteger("otp")->nullable();
            $table->integer("added_by")->nullable();
            $table->timestamp("email_verified_at");
            $table->string("password");
            $table->string("code", 255)->nullable();
            $table->string("phone", 255);
            $table->boolean("status")->default(true);
            $table->tinyInteger("role")->default(3);
            $table->boolean("verify")->default(false);
            $table->string("device_token")->nullable();
            $table->boolean("notification")->default(true);
            $table->boolean("mail")->default(true);
            $table->rememberToken();
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
        Schema::dropIfExists("users");
    }
}
