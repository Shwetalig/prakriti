<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePhoneTypeInAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            // Change phone column to string type
            $table->string('phone')->change();
        });
    }

    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            // Revert back to integer type if needed
            $table->integer('phone')->change();
        });
    }
}

