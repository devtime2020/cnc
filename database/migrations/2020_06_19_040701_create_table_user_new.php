<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kds_cnc_user', function (Blueprint $table) {
            $table->id();
            $table->string('userusid');
            $table->text('userpasw');
            $table->text('userusnm');
            $table->text('userusdsc');
            $table->date('usersdat');
            $table->date('useredat');
            $table->integer('userstat');
            $table->integer('useracprof');
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
        Schema::table('kds_cns_user', function (Blueprint $table) {
            //
        });
    }
}
