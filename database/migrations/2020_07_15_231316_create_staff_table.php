<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('staff_fname');
            $table->string('staff_lname');
            $table->string('staff_email')->unique();
            $table->string('staff_address_line1');
            $table->string('staff_address_line2');
            $table->string('staff_city');
            $table->string('staff_postcode');
            $table->string('staff_contact');
            $table->string('staff_next_kin')->nullable();;
            $table->string('staff_kin_contact')->nullable();;
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
        Schema::dropIfExists('staff');
    }
}
