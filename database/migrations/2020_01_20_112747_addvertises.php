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
            $table->string('CustomerName');
            $table->string('name');
            $table->string('email');
            $table->string('title')->nullable();
            $table->string('cat')->nullable();
            $table->string('ostan')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('insta')->nullable();
            $table->string('telegram')->nullable();
            $table->string('confirm')->nullable();
            $table->string('Special')->nullable();
            $table->string('is_admin')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->softDeletes();
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
        //
    }
}
