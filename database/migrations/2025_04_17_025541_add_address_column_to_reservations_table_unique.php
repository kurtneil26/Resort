<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressColumnToReservationsTableUnique extends Migration // Renamed class
{
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->string('address')->default('')->change(); // Set a default value for address
        });
    }

    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->string('address')->nullable(false)->change(); // Revert to NOT NULL without default
        });
    }
}
