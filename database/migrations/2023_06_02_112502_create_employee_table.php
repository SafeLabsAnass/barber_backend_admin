<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create("employee", function (Blueprint $table) {
            $table->id();
            $table->integer("salon_id");
            $table->string("name", 255);
            $table->string("image", 255)->default("noimage.jpg");
            $table->string("email", 255);
            $table->bigInteger("phone");
            $table->text("service_id");
            $table->boolean("status")->default(true);
            $table->boolean("isdelete")->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("employee");
    }
};
