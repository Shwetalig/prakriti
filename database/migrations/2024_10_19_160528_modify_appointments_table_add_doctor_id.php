<?php

// database/migrations/2024_xx_xx_modify_appointments_table_add_doctor_id.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyAppointmentsTableAddDoctorId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            // Remove the old 'doctor' field (ensure no data is needed from this column)
            $table->dropColumn('doctor');

            // Add the new 'doctor_id' foreign key
            $table->unsignedBigInteger('doctor_id');

            // Set up the foreign key constraint referencing the 'id' column in 'doctors' table
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['doctor_id']);

            // Drop the 'doctor_id' column
            $table->dropColumn('doctor_id');

            // Add back the 'doctor' column if needed for rollback
            $table->string('doctor');
        });
    }
}
