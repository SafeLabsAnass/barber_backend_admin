<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create("gallery", function (Blueprint $table) {
            $table->id("gallery_id");
            $table->integer("salon_id");
            $table->string("image", 255);
            $table->boolean("status")->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("gallery");
    }
};
