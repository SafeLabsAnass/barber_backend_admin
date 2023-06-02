<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create("address", function (Blueprint $table) {
            $table->id("address_id");
            $table->integer("user_id");
            $table->text("street");
            $table->string("city", 255);
            $table->string("state", 255);
            $table->string("country", 255);
            $table->text("let");
            $table->text("long");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("address");
    }
};
