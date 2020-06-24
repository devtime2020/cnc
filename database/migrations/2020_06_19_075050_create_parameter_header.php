<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParameterHeader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kds_cnc_paramh', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parhtbid');
            $table->text('parhtabnm');
            $table->integer('parhtabcom');
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
        Schema::dropIfExists('kds_cnc_paramh');
    }
}
