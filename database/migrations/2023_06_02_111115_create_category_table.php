<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create("category", function (Blueprint $table) {
            $table->id("cat_id");
            $table->string("name", 255);
            $table->string("image", 255)->default("noimage.jpg");
            $table->boolean("status")->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("category");
    }
};
