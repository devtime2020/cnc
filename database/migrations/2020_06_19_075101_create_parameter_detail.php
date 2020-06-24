<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParameterDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kds_cnc_paramd', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pardtbid');
            $table->integer('pardtabent');
            $table->text('pardsdesc');
            $table->text('pardldesc');
            $table->integer('pardvan1');
            $table->integer('pardvan2');
            $table->integer('pardvan3');
            $table->integer('pardvan4');
            $table->text('pardvac1');
            $table->text('pardvac2');
            $table->text('pardvac3');
            $table->date('parddate1');
            $table->date('parddate2');
            $table->date('parddate3');
            $table->text('pardcomm');
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
        Schema::dropIfExists('kds_cnc_paramd');
    }
}
