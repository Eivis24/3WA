<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token')->nullable();
            $table->string('userEmail');
            $table->foreign('userEmail')->references('email')->on('users')->onDelete('cascade');
            $table->integer('itemId')->unsigned();
            $table->foreign('itemId')->references('id')->on('items')->onDelete('cascade');
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
        Schema::table('items', function (Blueprint $table) 
        {
            Schema::dropIfExists('carts');
        });
    }
}