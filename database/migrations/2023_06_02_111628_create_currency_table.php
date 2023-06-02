<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create("currency", function (Blueprint $table) {
            $table->id();
            $table->string("country", 100);
            $table->string("currency", 100);
            $table->string("code", 100);
            $table->string("symbol", 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("currency");
    }
};
