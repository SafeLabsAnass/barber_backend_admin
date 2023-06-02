<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create("emp_working_hours", function (Blueprint $table) {
            $table->id();
            $table->bigInteger("emp_id");
            $table->bigInteger("salon_id");
            $table->string("day_index", 255);
            $table->text("period_list");
            $table->boolean("status");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("emp_working_hours");
    }
};
