<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_reqs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table -> string('customer');
            $table -> string('package');
            $table -> string('location');
            $table -> integer('packs');
            $table -> string('vehicle');
            $table -> date('arrival');
            $table -> date('departure');
            $table -> longText('message');
            $table -> string('first_name');
            $table -> string('last_name');
            $table -> string('passport');
            $table -> string('country');
            $table -> string('number');
            $table -> string('email');
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
        Schema::dropIfExists('package_reqs');
    }
}
