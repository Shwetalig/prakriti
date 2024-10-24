<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('specialities', function (Blueprint $table) {
        $table->text('desc1')->nullable();  // First paragraph of description
        $table->text('desc2')->nullable();  // Second paragraph of description
        $table->string('desc_image')->nullable();  // Image path
    });
}

public function down()
{
    Schema::table('specialities', function (Blueprint $table) {
        $table->dropColumn(['desc1', 'desc2', 'desc_image']);
    });
}

};
