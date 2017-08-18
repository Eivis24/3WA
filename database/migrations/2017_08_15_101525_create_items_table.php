<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('imageURL');
            $table->float('price',6,2);
            $table->float('tax',6,2);
            $table->string('inStock');
            $table->timestamp('lastRecieved');
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
            Schema::dropIfExists('items');
        });
    }
}
