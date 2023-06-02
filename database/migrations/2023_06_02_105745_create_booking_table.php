<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create("booking", function (Blueprint $table) {
            $table->id();
            $table->string("booking_id", 255);
            $table->integer("salon_id");
            $table->integer("user_id");
            $table->integer("emp_id");
            $table->text("service_id");
            $table->integer("coupon_id")->nullable();
            $table->float("discount");
            $table->float("payment");
            $table->date("date");
            $table->string("start_time", 20);
            $table->string("end_time", 20);
            $table->string("payment_time", 20);
            $table->text("payment_token");
            $table->boolean("payment_status")->default(false);
            $table->string("booking_status", 20);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("booking");
    }
};
