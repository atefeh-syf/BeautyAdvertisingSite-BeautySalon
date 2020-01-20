<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addvertises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('addvertises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('cat');
            $table->string('ostan');
            $table->unsignedBigInteger('user_id');
            $table->string('address');
            $table->string('tel')->nullable();
            $table->string('insta')->nullable();
            $table->string('telegram')->nullable();
            $table->string('confirm');
            $table->string('is_admin');
            $table->string('image');
            $table->text('description')->nullable();
            $table->timestamps();


            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
