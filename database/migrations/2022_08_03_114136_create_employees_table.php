<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 200);
            $table->string('department', 50);
            $table->string('position', 50);
            $table->string('email', 50);
            $table->string('make', 20);
            $table->string('model', 20);
            $table->string('serial', 50);
            $table->string('category', 20);
            $table->string('date_acquired', 50);
            $table->string('os', 20);
            $table->string('processor', 30);
            $table->string('proc_speed', 20);
            $table->string('ram_type', 10);
            $table->string('ram_slots', 10);
            $table->string('ram_capacity', 10);
            $table->string('ram_mhz', 10);
            $table->string('drve_type', 10);
            $table->string('drve_capacity', 10);
            $table->string('remarks', 255);
            $table->string('avatar', 100);
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
        Schema::dropIfExists('employees');
    }
};
