<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToPassportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('passports', function (Blueprint $table) {
            $table->timestamp('incoming_date')->nullable();
            $table->string('sender_name')->nullable();
            $table->string('subtaxa')->nullable();
            $table->string('donor_institute')->nullable();
            $table->string('donor_address')->nullable();
            $table->string('province')->nullable();
            $table->string('distribution_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('passports', function (Blueprint $table) {
            //
        });
    }
}
