<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create("adminsetting", function (Blueprint $table) {
            $table->id();
            $table->boolean("user_verify")->default(true);
            $table->boolean("user_verify_sms")->default(true);
            $table->boolean("user_verify_email")->default(true);
            $table->string("currency", 255);
            $table->string("currency_symbol", 255);
            $table->string("mapkey", 255)->nullable();
            $table->string("lat", 255)->nullable();
            $table->string("lang", 255)->nullable();
            $table->boolean("notification");
            $table->string("app_id", 100)->nullable();
            $table->string("api_key", 100)->nullable();
            $table->string("auth_key", 100)->nullable();
            $table->string("project_no", 100)->nullable();
            $table->boolean("mail")->default(true);
            $table->string("mail_host", 255)->nullable();
            $table->string("mail_port", 255)->nullable();
            $table->string("mail_username", 255)->nullable();
            $table->string("mail_password", 255)->nullable();
            $table->string("sender_email", 255)->nullable();
            $table->boolean("sms")->default(true);
            $table->string("twilio_acc_id", 255)->nullable();
            $table->string("twilio_auth_token", 255)->nullable();
            $table->string("twilio_phone_no", 255)->nullable();
            $table->longText("terms_conditions")->nullable();
            $table->longText("privacy_policy")->nullable();
            $table->integer("radius");
            $table->string("app_name", 255);
            $table->string("favicon", 50);
            $table->string("black_logo", 50);
            $table->string("white_logo", 50)->nullable();
            $table->string("app_version", 100)->nullable();
            $table->text("footer1")->nullable();
            $table->text("footer2")->nullable();
            $table->string("bg_img", 255);
            $table->string("color", 255)->nullable();
            $table->string("license_code", 50)->nullable();
            $table->string("license_client_name", 255)->nullable();
            $table->boolean("license_status");
            $table->string("shared_name", 255)->nullable();
            $table->string("shared_image", 255)->nullable();
            $table->string("shared_url", 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("adminsetting");
    }
};
