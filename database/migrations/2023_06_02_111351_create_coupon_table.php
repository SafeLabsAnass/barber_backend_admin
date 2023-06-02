<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create("coupon", function (Blueprint $table) {
            $table->id("coupon_id");
            $table->text("desc");
            $table->string("code", 255);
            $table->integer("max_use");
            $table->integer("use_count");
            $table->string("type", 255);
            $table->float("discount");
            $table->date("start_date");
            $table->date("end_date");
            $table->boolean("status")->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("coupon");
    }
};
